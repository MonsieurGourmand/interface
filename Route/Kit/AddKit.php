<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/20/17
 * Time: 6:10 PM
 */

namespace monsieurgourmand\Bundle\InterfaceBundle\Route\Kit;


use monsieurgourmand\Bundle\InterfaceBundle\Model\Kit;
use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;

class AddKit
{
    private $entity;
    private $url;
    private $master;

    public function __construct(Kit $kit)
    {
        $this->master = $kit->getMaster();
        $this->entity = Kit::class;
        $this->url = "/formats/" . $kit->getIdKit() . "/addKits";
    }

    public function put($idKit, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->put($this->url, $idKit, null, $this->entity, $format);
    }

}