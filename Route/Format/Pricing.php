<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/20/17
 * Time: 6:10 PM
 */

namespace monsieurgourmand\Bundle\InterfaceBundle\Route\Format;


use monsieurgourmand\Bundle\InterfaceBundle\Model\Format;
use monsieurgourmand\Bundle\InterfaceBundle\Model\Product;
use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;

class Pricing
{
    private $entity;
    private $url;
    private $master;
    private $idFormat;

    public function __construct(Format $format)
    {
        $this->idFormat = $format->getIdFormat();
        $this->master = $format->getMaster();
        $this->entity = \monsieurgourmand\Bundle\InterfaceBundle\Model\Pricing::class;
    }

    public function get($idOperation, $format = MGD::FORMAT_OBJECT)
    {
        $this->url = "/operations/" . $idOperation . "/formats/" . $this->idFormat . '/pricings';
        return $this->master->get($this->url, 1, $this->entity, $format);
    }

    public function post(\monsieurgourmand\Bundle\InterfaceBundle\Model\Pricing $pricing, $idOperation, $format = MGD::FORMAT_OBJECT)
    {
        $this->url = "/operations/" . $idOperation . "/formats/" . $this->idFormat . '/pricings';
        return $this->master->post($this->url, $pricing, $this->entity, $format);
    }

    public function put(\monsieurgourmand\Bundle\InterfaceBundle\Model\Pricing $pricing, $idOperation, $format = MGD::FORMAT_OBJECT)
    {
        $this->url = "/operations/" . $idOperation . "/formats/" . $this->idFormat . '/pricings';
        return $this->master->put($this->url, $pricing->getId(), $pricing, $this->entity, $format);
    }
}