<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Service;

use monsieurgourmand\Bundle\InterfaceBundle\Model\Packaging;
use monsieurgourmand\Bundle\InterfaceBundle\Route\Action;
use monsieurgourmand\Bundle\InterfaceBundle\Route\Allergen;
use monsieurgourmand\Bundle\InterfaceBundle\Route\Bill;
use monsieurgourmand\Bundle\InterfaceBundle\Route\Category;
use monsieurgourmand\Bundle\InterfaceBundle\Route\Customer;
use monsieurgourmand\Bundle\InterfaceBundle\Route\Diet;
use monsieurgourmand\Bundle\InterfaceBundle\Route\Event;
use monsieurgourmand\Bundle\InterfaceBundle\Route\Format;
use monsieurgourmand\Bundle\InterfaceBundle\Route\Implementation;
use monsieurgourmand\Bundle\InterfaceBundle\Route\Operation;
use monsieurgourmand\Bundle\InterfaceBundle\Route\Product;
use monsieurgourmand\Bundle\InterfaceBundle\Route\Prospect;
use monsieurgourmand\Bundle\InterfaceBundle\Route\Purchase;
use monsieurgourmand\Bundle\InterfaceBundle\Route\Purpose;
use monsieurgourmand\Bundle\InterfaceBundle\Route\Stat;
use monsieurgourmand\Bundle\InterfaceBundle\Route\Supplier;
use monsieurgourmand\Bundle\InterfaceBundle\Route\Trace;
use monsieurgourmand\Bundle\InterfaceBundle\Route\User;
use monsieurgourmand\Bundle\InterfaceBundle\Route\Zone;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class MGD
{
    const TOKEN_ENDPOINT = '/oauth/v2/token';

    private $oauthRoot;
    private $apiRoot;

    const SORT_DESC = "desc";
    const SORT_ASC = "asc";

    const FORMAT_OBJECT = "object";
    const FORMAT_JSON = "json";
    const FORMAT_PDF = "pdf";

    private $client_id;
    private $client_secret;
    private $callback;
    private $parser;
    private $serializer;
    private $client;
    private $refresh_token;
    private $session;
    public $supplier;
    public $purchase;
    public $category;
    public $customer;
    public $action;
    public $product;
    public $operation;
    public $user;
    public $zone;
    public $stat;
    public $format;
    public $prospect;
    public $event;
    public $bill;
    public $trace;
    public $allergen;
    public $diet;
    public $implementation;
    public $purpose;
    public $packaging;

    public function __construct(Session $session = null, Parser $parser, Serializer $serializer, $client_id, $client_secret, $callback, $oauthRoot)
    {
        $this->parser = $parser;
        $this->serializer = $serializer;
        $this->oauthRoot = $oauthRoot;
        $this->apiRoot = $oauthRoot . '/v1';
        $this->client_id = $client_id;
        $this->client_secret = $client_secret;
        $this->callback = $callback;
        $this->session = $session;
        if ($this->session && $this->session->get('client')) {
            $this->refresh_token = $this->session->get('refresh_token');
            $this->client = $this->session->get('client');
        }
        $this->supplier = new Supplier($this);
        $this->category = new Category($this);
        $this->customer = new Customer($this);
        $this->action = new Action($this);
        $this->product = new Product($this);
        $this->purchase = new Purchase($this);
        $this->operation = new Operation($this);
        $this->user = new User($this);
        $this->zone = new Zone($this);
        $this->stat = new Stat($this);
        $this->format = new Format($this);
        $this->event = new Event($this);
        $this->bill = new Bill($this);
        $this->diet = new Diet($this);
        $this->trace = new Trace($this);
        $this->allergen = new Allergen($this);
        $this->implementation = new Implementation($this);
        $this->purpose = new Purpose($this);
        $this->packaging = new Packaging($this);

    }

    public function login()
    {
        return $this->oauthRoot . '/oauth/v2/auth?client_id=' . $this->client_id . '&redirect_uri=' . $this->callback . '&response_type=code';
    }

    public function access(Request $request)
    {
        $this->client = new \OAuth2\Client($this->client_id, $this->client_secret);
        $response = $this->client->getAccessToken($this->oauthRoot . self::TOKEN_ENDPOINT, 'authorization_code', array('code' => $request->query->get('code'), "redirect_uri" => $this->callback));
        $this->client->setAccessToken($response['result']['access_token']);
        $request->getSession()->set('client', $this->client);
        $request->getSession()->set('refresh_token', $response['result']['refresh_token']);
        $this->me($request);
    }

    public function accessClientCredential()
    {
        $this->client = new \OAuth2\Client($this->client_id, $this->client_secret);
        $response = $this->client->getAccessToken($this->oauthRoot . self::TOKEN_ENDPOINT, 'client_credentials', array());
        if ($this->session)
            $this->session->set('client', $this->client);
        $this->client->setAccessToken($response['result']['access_token']);

        // Générations des routes anonymes
        $this->prospect = new Prospect($this);
    }

    public function me(Request $request)
    {
        $response = $request->getSession()->get('client')->fetch($this->apiRoot . '/me');
        $request->getSession()->set('me', $this->parser->parse($response['result'], \monsieurgourmand\Bundle\InterfaceBundle\Model\User::class, $this, self::FORMAT_OBJECT));
    }

    public function getAll($url, $entityClass, $params = array(), $format)
    {
        $response = $this->client->fetch($this->apiRoot . $url . '.json', $this->serializer->serialize($params));
        if (self::getError($response))
            return self::getAll($url, $entityClass, $params, $format);
        if ($format == self::FORMAT_OBJECT)
            return $this->parser->parse($response['result'], $entityClass, $this, $format);
        elseif ($format == self::FORMAT_JSON)
            return json_encode($response['result']);
        else
            return $response['result'];
    }

    public function get($url, $id, $entityClass, $format)
    {
        $format == self::FORMAT_PDF ? $dot = ".pdf" : $dot = ".json";
        if ($id != null)
            $response = $this->client->fetch($this->apiRoot . $url . '/' . $id . $dot);
        else
            $response = $this->client->fetch($this->apiRoot . $url . $dot);
        if (self::getError($response))
            return self::get($url, $id, $entityClass, $format);
        if ($format == self::FORMAT_OBJECT)
            return $this->parser->parse($response['result'], $entityClass, $this, $format);
        elseif ($format == self::FORMAT_JSON)
            return json_encode($response['result']);
        else
            return $response['result'];
    }

    public function post($url, $object, $entityClass, $format)
    {
        $response = $this->client->fetch($this->apiRoot . $url . '.json', $this->serializer->serialize($object), \OAuth2\Client::HTTP_METHOD_POST, array('Content-Type' => 'application/x-www-form-urlencoded'), \OAuth2\Client::HTTP_FORM_CONTENT_TYPE_APPLICATION);
        if (self::getError($response))
            return self::post($url, $object, $entityClass, $format);
        if ($format == self::FORMAT_OBJECT)
            return $this->parser->parse($response['result'], $entityClass, $this, $format);
        elseif ($format == self::FORMAT_JSON)
            return json_encode($response['result']);
        else
            return $response['result'];
    }

    public function put($url, $id, $object, $entityClass, $format)
    {
        $response = $this->client->fetch($this->apiRoot . $url . '/' . $id . '.json', $this->serializer->serialize($object), \OAuth2\Client::HTTP_METHOD_PUT, array('Content-Type' => 'application/x-www-form-urlencoded'), \OAuth2\Client::HTTP_FORM_CONTENT_TYPE_APPLICATION);
        if (self::getError($response))
            return self::put($url, $id, $object, $entityClass, $format);
        if ($format == self::FORMAT_OBJECT)
            return $this->parser->parse($response['result'], $entityClass, $this, $format);
        elseif ($format == self::FORMAT_JSON)
            return json_encode($response['result']);
        else
            return $response['result'];
    }

    public function patch($url, $id, $object, $entityClass, $format)
    {
        $response = $this->client->fetch($this->apiRoot . $url . '/' . $id . '.json', $this->serializer->serialize($object), \OAuth2\Client::HTTP_METHOD_PATCH, array('Content-Type' => 'application/x-www-form-urlencoded'), \OAuth2\Client::HTTP_FORM_CONTENT_TYPE_APPLICATION);
        if (self::getError($response))
            return self::patch($url, $id, $object, $entityClass, $format);
        if ($format == self::FORMAT_OBJECT)
            return $this->parser->parse($response['result'], $entityClass, $this, $format);
        elseif ($format == self::FORMAT_JSON)
            return json_encode($response['result']);
        else
            return $response['result'];
    }

    public function remove($url, $id)
    {
        $response = $this->client->fetch($this->apiRoot . $url . '/' . $id . '.json', array(), \OAuth2\Client::HTTP_METHOD_DELETE);
        if (self::getError($response))
            return self::remove($url, $id);
        return $response;
    }

    public function getError($response)
    {
        // Gestion de l'accessToken expired
        if ($response['code'] == 401 && $response['result']['error'] == "invalid_grant" && $response['result']['error_description'] == "The access token provided has expired.") {
            if ($this->refresh_token != null) {
                $response = $this->client->getAccessToken($this->oauthRoot . self::TOKEN_ENDPOINT, 'refresh_token', array('refresh_token' => $this->refresh_token));
                $this->client->setAccessToken($response['result']['access_token']);
                $this->refresh_token = $response['result']['refresh_token'];
                $this->session->set('client', $this->client);
                $this->session->set('refresh_token', $response['result']['refresh_token']);
                return true;
            } else {
                $this->accessClientCredential();
                return true;
            }
        }
        // Gestion de l'accessToken expired
        if (floor($response['code'] / 100) == 4) {
            throw new \Error("[" . $response['code'] . "] " . $response['result']['error']['message']);
        }
        if (floor($response['code'] / 100) > 4) {
            throw new \Error("[" . $response['code'] . "] " . $response['result']['error']['message']);
        }
    }

    public function getArrayTypeConst($type, $model, $choices = false)
    {
        $oClass = new \ReflectionClass($model);
        $constants = $oClass->getConstants();
        $result = array();
        foreach ($constants as $key => $constant) {
            if (strpos($key, $type) !== false) {
                if ($choices)
                    $result[$key] = $constant;
                else
                    $result[$constant] = $key;
            }
        }
        return $result;
    }
}
