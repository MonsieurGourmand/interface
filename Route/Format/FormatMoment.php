<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/20/17
 * Time: 6:10 PM
 */

namespace monsieurgourmand\Bundle\InterfaceBundle\Route\Event;


use monsieurgourmand\Bundle\InterfaceBundle\Model\Format;
use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;

class FormatMoment
{
    private $entity;
    private $url;
    private $master;

    public function __construct(Format $format)
    {
        $this->master = $format->getMaster();
        $this->entity = \monsieurgourmand\Bundle\InterfaceBundle\Model\EventMoment::class;
        $this->url = "/formats/" . $format->getIdFormat() . "/moments";
    }

    public function getAll($format = MGD::FORMAT_OBJECT, $params = array())
    {
        return $this->master->getAll($this->url, $this->entity, $params, $format);
    }

    public function get($id, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->get($this->url, $id, $this->entity, $format);
    }

    public function post(\monsieurgourmand\Bundle\InterfaceBundle\Model\FormatMoment $formatMoment, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->post($this->url, $formatMoment, $this->entity, $format);
    }

    public function put(\monsieurgourmand\Bundle\InterfaceBundle\Model\FormatMoment $formatMoment, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->put($this->url, $formatMoment->getIdFormatMoment(), $formatMoment, $this->entity, $format);
    }

    public function remove(\monsieurgourmand\Bundle\InterfaceBundle\Model\FormatMoment $formatMoment)
    {
        return $this->master->remove($this->url, $formatMoment->getIdFormatMoment());
    }

}