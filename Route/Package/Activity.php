<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/20/17
 * Time: 6:10 PM
 */

namespace monsieurgourmand\Bundle\InterfaceBundle\Route\Package;


use monsieurgourmand\Bundle\InterfaceBundle\Model\Package;
use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;

class Activity
{
    private $entity;
    private $url;
    private $master;

    public function __construct(Package $package)
    {
        $this->master = $package->getMaster();
        $this->entity = \monsieurgourmand\Bundle\InterfaceBundle\Model\Activity::class;
        $this->url = "/operations/" . $package->getEvent()->getOperation()->getIdOperation() . "/events/" . $package->getEvent()->getIdEvent() . "/packages/" . $package->getIdPackage() . '/activities';
    }

    public function getAll($params = array(), $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->getAll($this->url, $this->entity, $params, $format);
    }
}