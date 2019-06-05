<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/20/17
 * Time: 6:10 PM
 */

namespace monsieurgourmand\Bundle\InterfaceBundle\Route;


use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;

class Place
{

    private $master;
    private $entity;
    private $url;

    public function __construct(MGD $master)
    {
        $this->master = $master;
        $this->entity = \monsieurgourmand\Bundle\InterfaceBundle\Model\Place::class;
        $this->url = '/places';
    }

    public function getAll($params = array(), $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->getAll($this->url, $this->entity, $params, $format);
    }

    public function get($id, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->get($this->url, $id, $this->entity, $format);
    }

    public function post(\monsieurgourmand\Bundle\InterfaceBundle\Model\Place $place, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->post($this->url, $place, $this->entity, $format);
    }

    public function put(\monsieurgourmand\Bundle\InterfaceBundle\Model\Place $place, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->put($this->url, $place->getId(), $place, $this->entity, $format);
    }

}
