<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/20/17
 * Time: 6:10 PM
 */

namespace monsieurgourmand\Bundle\InterfaceBundle\Route\Format;

use monsieurgourmand\Bundle\InterfaceBundle\Model\Format;
use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;

class FormatProduct
{
    private $entity;
    private $url;
    private $master;

    public function __construct(Format $format)
    {
        $this->master = $format->getMaster();
        $this->entity = \monsieurgourmand\Bundle\InterfaceBundle\Model\FormatProduct::class;
        $this->url = "/formats/" . $format->getIdFormat() . "/products";
    }

    public function getAll($format = MGD::FORMAT_OBJECT)
    {
        $params = array();
        return $this->master->getAll($this->url, $this->entity, $params, $format);
    }

    public function get($id, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->get($this->url, $id, $this->entity, $format);
    }

    public function post(\monsieurgourmand\Bundle\InterfaceBundle\Model\FormatProduct $formatProduct, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->post($this->url, $formatProduct, $this->entity, $format);
    }

    public function put(\monsieurgourmand\Bundle\InterfaceBundle\Model\FormatProduct $formatProduct, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->put($this->url, $formatProduct->getIdFormatProduct(), $formatProduct, $this->entity, $format);
    }

    public function remove(\monsieurgourmand\Bundle\InterfaceBundle\Model\FormatProduct $formatProduct)
    {
        return $this->master->remove($this->url, $formatProduct->getIdFormatProduct());
    }

}