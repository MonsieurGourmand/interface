<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/20/17
 * Time: 6:10 PM
 */

namespace monsieurgourmand\Bundle\InterfaceBundle\Route;


use monsieurgourmand\Bundle\InterfaceBundle\Model\Event;
use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;

class Amount
{
    private $entity;
    private $url;
    private $master;

    public function __construct(MGD $master)
    {
        $this->master = $master;
        $this->entity = \monsieurgourmand\Bundle\InterfaceBundle\Model\Amount::class;
        $this->url = "/amounts";
    }

    public function getAll($format = MGD::FORMAT_OBJECT, $params = array())
    {
        return $this->master->getAll($this->url, $this->entity, $params, $format);
    }

    public function put(\monsieurgourmand\Bundle\InterfaceBundle\Model\Amount $amount, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->put($this->url, $amount->getIdAmount(), $amount, $this->entity, $format);
    }

    public function remove($idAmount)
    {
        return $this->master->remove($this->url, $idAmount);
    }

}