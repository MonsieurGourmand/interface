<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Service;

use monsieurgourmand\Bundle\InterfaceBundle\Route\BusinessLine;
use monsieurgourmand\Bundle\InterfaceBundle\Route\Coupon;
use monsieurgourmand\Bundle\InterfaceBundle\Route\MarketplacePlan;
use monsieurgourmand\Bundle\InterfaceBundle\Route\ProductCertification;
use monsieurgourmand\Bundle\InterfaceBundle\Route\Sponsorship;
use monsieurgourmand\Bundle\InterfaceBundle\Route\SupplierCertification;
use Symfony\Component\HttpKernel\Exception\HttpException;
use monsieurgourmand\Bundle\InterfaceBundle\Route\Action;
use monsieurgourmand\Bundle\InterfaceBundle\Route\Allergen;
use monsieurgourmand\Bundle\InterfaceBundle\Route\AllProduct;
use monsieurgourmand\Bundle\InterfaceBundle\Route\Amount;
use monsieurgourmand\Bundle\InterfaceBundle\Route\Application;
use monsieurgourmand\Bundle\InterfaceBundle\Route\Bill;
use monsieurgourmand\Bundle\InterfaceBundle\Route\Billing;
use monsieurgourmand\Bundle\InterfaceBundle\Route\Category;
use monsieurgourmand\Bundle\InterfaceBundle\Route\Cause;
use monsieurgourmand\Bundle\InterfaceBundle\Route\Channel;
use monsieurgourmand\Bundle\InterfaceBundle\Route\Contact;
use monsieurgourmand\Bundle\InterfaceBundle\Route\Customer;
use monsieurgourmand\Bundle\InterfaceBundle\Route\Diet;
use monsieurgourmand\Bundle\InterfaceBundle\Route\DiscountType;
use monsieurgourmand\Bundle\InterfaceBundle\Route\Document;
use monsieurgourmand\Bundle\InterfaceBundle\Route\Event;
use monsieurgourmand\Bundle\InterfaceBundle\Route\Format;
use monsieurgourmand\Bundle\InterfaceBundle\Route\FproCustomer;
use monsieurgourmand\Bundle\InterfaceBundle\Route\Implementation;
use monsieurgourmand\Bundle\InterfaceBundle\Route\Kit;
use monsieurgourmand\Bundle\InterfaceBundle\Route\Menu;
use monsieurgourmand\Bundle\InterfaceBundle\Route\Notification;
use monsieurgourmand\Bundle\InterfaceBundle\Route\Operation;
use monsieurgourmand\Bundle\InterfaceBundle\Route\Package;
use monsieurgourmand\Bundle\InterfaceBundle\Route\Packaging;
use monsieurgourmand\Bundle\InterfaceBundle\Route\PaymentMethod;
use monsieurgourmand\Bundle\InterfaceBundle\Route\Place;
use monsieurgourmand\Bundle\InterfaceBundle\Route\Product;
use monsieurgourmand\Bundle\InterfaceBundle\Route\ProspectMessage;
use monsieurgourmand\Bundle\InterfaceBundle\Route\Purchase;
use monsieurgourmand\Bundle\InterfaceBundle\Route\Purpose;
use monsieurgourmand\Bundle\InterfaceBundle\Route\Shipper;
use monsieurgourmand\Bundle\InterfaceBundle\Route\ShopType;
use monsieurgourmand\Bundle\InterfaceBundle\Route\Stat;
use monsieurgourmand\Bundle\InterfaceBundle\Route\Supplier;
use monsieurgourmand\Bundle\InterfaceBundle\Route\Team;
use monsieurgourmand\Bundle\InterfaceBundle\Route\Trace;
use monsieurgourmand\Bundle\InterfaceBundle\Route\User;
use monsieurgourmand\Bundle\InterfaceBundle\Route\Zone;
use OAuth2\Client;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;

class MGD
{
    const TOKEN_ENDPOINT = '/oauth/v2/token';
    const CONNEXION_ENDPOINT = '/oauth/v2/connexion';

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
    /** @var Client */
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
    public $prospectMessage;
    public $event;
    public $bill;
    public $trace;
    public $allergen;
    public $diet;
    public $implementation;
    public $purpose;
    public $packaging;
    public $cause;
    public $package;
    public $kits;
    public $amount;
    public $menu;
    public $shipper;
    public $document;
    public $application;
    public $eventDiscountType;
    public $place;
    public $notifications;
    public $channels;
    public $teams;
    public $allProducts;
    public $billings;
    public $contact;
    public $shopTypes;
    public $paymentMethod;
    public $supplierCertification;
    public $productCertification;
    public $businessLines;
    public $sponsorship;
    public $marketplacePlans;
    public $coupon;

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
        $this->cause = new Cause($this);
        $this->package = new Package($this);
        $this->kits = new Kit($this);
        $this->amount = new Amount($this);
        $this->menu = new Menu($this);
        $this->shipper = new Shipper($this);
        $this->document = new Document($this);
        $this->application = new Application($this);
        $this->eventDiscountType = new DiscountType($this);
        $this->place = new Place($this);
        $this->billings = new Billing($this);
        $this->notifications = new Notification($this);
        $this->teams = new Team($this);
        $this->channels = new Channel($this);
        $this->allProducts = new AllProduct($this);
        $this->contact = new Contact($this);
        $this->shopTypes = new ShopType($this);
        $this->paymentMethod = new PaymentMethod($this);
        $this->supplierCertification = new SupplierCertification($this);
        $this->productCertification = new ProductCertification($this);
        $this->businessLines = new BusinessLine($this);
        $this->sponsorship = new Sponsorship($this);
        $this->marketplacePlans = new MarketplacePlan($this);
        $this->coupon = new Coupon($this);
    }

    public function login()
    {
        return $this->oauthRoot . '/oauth/v2/auth?client_id=' . $this->client_id . '&redirect_uri=' . $this->callback . '&response_type=code';
    }

    public function access(Request $request)
    {
        $this->client = new Client($this->client_id, $this->client_secret);
        $response = $this->client->getAccessToken($this->oauthRoot . self::TOKEN_ENDPOINT, 'authorization_code', array('code' => $request->query->get('code'), "redirect_uri" => $this->callback));
        $this->client->setAccessToken($response['result']['access_token']);
        $request->getSession()->set('client', $this->client);
        $request->getSession()->set('refresh_token', $response['result']['refresh_token']);
        $this->me($request);
    }

    public function accessClientCredential()
    {
        $this->client = new Client($this->client_id, $this->client_secret);
        $response = $this->client->getAccessToken($this->oauthRoot . self::TOKEN_ENDPOINT, 'client_credentials', array());
        if ($this->session)
            $this->session->set('client', $this->client);
        $this->client->setAccessToken($response['result']['access_token']);

        // Générations des routes anonymes
        $this->prospectMessage = new ProspectMessage($this);
    }

    public function accessPassword(Request $request, string $username, string $password)
    {
        $this->client = new Client($this->client_id, $this->client_secret);
        $response = $this->client->getAccessToken($this->oauthRoot . self::TOKEN_ENDPOINT, 'password', array('username' => $username, 'password' => $password, "redirect_uri" => $this->callback));
        if ($response['code'] != 200) {
            return false;
        }
        $this->client->setAccessToken($response['result']['access_token']);
        $request->getSession()->set('client', $this->client);
        $request->getSession()->set('refresh_token', $response['result']['refresh_token']);
        $this->me($request);

        return true;
    }

    public function accessConnexion(Request $request, string $type, string $distantToken)
    {
        $this->client = new Client($this->client_id, $this->client_secret);

        $url = $this->oauthRoot . self::CONNEXION_ENDPOINT . '?type=' . $type . '&distant_token=' . $distantToken .
            '&client_id=' . substr($this->client_id, strpos($this->client_id, '_') + 1);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);
        $response = json_decode($output);
        if (curl_errno($ch) || !$response->access_token) {

            return false;
        }
        curl_close($ch);
        $this->client->setAccessToken($response->access_token);
        $request->getSession()->set('client', $this->client);
        $request->getSession()->set('refresh_token', $response->refresh_token);
        $this->me($request);

        return true;
    }

    public function reset()
    {
        $this->session->clear();
        $this->client = null;
    }

    public function me(Request $request)
    {
        $response = $request->getSession()->get('client')->fetch($this->apiRoot . '/me');
        $request->getSession()->set('me', $this->parser->parse($response['result'], \monsieurgourmand\Bundle\InterfaceBundle\Model\User::class, $this, self::FORMAT_OBJECT));
    }

    public function getAll($url, $entityClass, $params = array(), $format)
    {
        if ($this->client) {
            $format == self::FORMAT_PDF ? $dot = ".pdf" : $dot = ".json";
            $response = $this->client->fetch($this->apiRoot . $url . $dot, $this->serializer->serialize($params));
            if (self::getError($response))
                return self::getAll($url, $entityClass, $params, $format);
            if ($format == self::FORMAT_OBJECT)
                return $this->parser->parse($response['result'], $entityClass, $this, $format);
            elseif ($format == self::FORMAT_JSON)
                return json_encode($response['result']);
            else
                return $response['result'];
        }
    }

    public function get($url, $id, $entityClass, $format, $params = array())
    {
        $format == self::FORMAT_PDF ? $dot = ".pdf" : $dot = ".json";
        if ($id != null)
            $response = $this->client->fetch($this->apiRoot . $url . '/' . $id . $dot, $this->serializer->serialize($params));
        else
            $response = $this->client->fetch($this->apiRoot . $url . $dot, $this->serializer->serialize($params));
        if (self::getError($response))
            return self::get($url, $id, $entityClass, $format);
        if ($format == self::FORMAT_OBJECT)
            return $this->parser->parse($response['result'], $entityClass, $this, $format);
        elseif ($format == self::FORMAT_JSON)
            return json_encode($response['result']);
        else
            return $response['result'];
    }

    public function post($url, $object, $entityClass, $format, bool $postFile = false)
    {
        if ($postFile) {
            $this->client->setAccessTokenType(Client::ACCESS_TOKEN_BEARER);
            $response = $this->client->fetch($this->apiRoot . $url, ['file_contents' => $object], \OAuth2\Client::HTTP_METHOD_POST, array('Content-Type' => 'multipart/form-data'));
        } else {
            $response = $this->client->fetch($this->apiRoot . $url . '.json', $this->serializer->serialize($object), Client::HTTP_METHOD_POST, array('Content-Type' => 'application/x-www-form-urlencoded'), Client::HTTP_FORM_CONTENT_TYPE_APPLICATION);
        }
        if ($response['code'] == 204) {
            return null;
        }
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
        $response = $this->client->fetch($this->apiRoot . $url . '/' . $id . '.json', $this->serializer->serialize($object), Client::HTTP_METHOD_PUT, array('Content-Type' => 'application/x-www-form-urlencoded'), Client::HTTP_FORM_CONTENT_TYPE_APPLICATION);
        if ($response['code'] == 204) {
            return null;
        }
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
        $response = $this->client->fetch($this->apiRoot . $url . '/' . $id . '.json', $this->serializer->serialize($object), Client::HTTP_METHOD_PATCH, array('Content-Type' => 'application/x-www-form-urlencoded'), Client::HTTP_FORM_CONTENT_TYPE_APPLICATION);
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
        $response = $this->client->fetch($this->apiRoot . $url . '/' . $id . '.json', array(), Client::HTTP_METHOD_DELETE);
        if (self::getError($response))
            return self::remove($url, $id);
        return $response;
    }

    /**
     * @param $response
     * @return bool
     * @throws HttpException
     */
    public function getError($response)
    {
        // Gestion de l'accessToken expired
        if ($response['code'] == 401 && $response['result']['error'] == "invalid_grant" && $response['result']['error_description'] == "The access token provided has expired.") {
            if ($this->refresh_token != null) {
                $response = $this->client->getAccessToken($this->oauthRoot . self::TOKEN_ENDPOINT, 'refresh_token', array('refresh_token' => $this->refresh_token));
                if (!isset($response['result']['access_token'])) {
                    $this->reset();
                    throw new UnauthorizedHttpException('refresh token expired');
                }
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
