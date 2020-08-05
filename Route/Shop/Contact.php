<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/20/17
 * Time: 6:10 PM
 */

namespace monsieurgourmand\Bundle\InterfaceBundle\Route\Shop;

use monsieurgourmand\Bundle\InterfaceBundle\Model\Place;
use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;

class Contact
{
    private $entity;
    private $url;
    private $master;

    public function __construct(Place $shop)
    {
        $this->master = $shop->getMaster();
        $this->entity = Place::class;
        $this->url = "/shops/" . $shop->getId() . '/contacts';
    }

    public function getAll($params = [], $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->getAll($this->url, $this->entity, $params, $format);
    }
}
