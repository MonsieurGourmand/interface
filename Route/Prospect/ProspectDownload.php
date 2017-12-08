<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/20/17
 * Time: 6:10 PM
 */

namespace monsieurgourmand\Bundle\InterfaceBundle\Route\Prospect;


use monsieurgourmand\Bundle\InterfaceBundle\Model\Prospect;
use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;

class ProspectDownload
{
    private $entity;
    private $url;
    private $master;

    public function __construct(Prospect $prospect)
    {
        $this->master = $prospect->getMaster();
        $this->entity = \monsieurgourmand\Bundle\InterfaceBundle\Model\ProspectDownload::class;
        $this->url = "/prospects/" . $prospect->getId() . "/downloads";
    }

    public function getAll($format=MGD::FORMAT_OBJECT)
    {
        $params = array();
        return $this->master->getAll($this->url, $this->entity,$params,$format);
    }

    public function get($id,$format=MGD::FORMAT_OBJECT)
    {
        return $this->master->get($this->url,$id,$this->entity,$format);
    }

    public function post(\monsieurgourmand\Bundle\InterfaceBundle\Model\ProspectDownload $download,$format=MGD::FORMAT_OBJECT)
    {
        return $this->master->post($this->url,$download,$this->entity,$format);
    }

    public function put(\monsieurgourmand\Bundle\InterfaceBundle\Model\ProspectDownload $download,$format=MGD::FORMAT_OBJECT)
    {
        return $this->master->put($this->url,$download->getIdDownload(),$download,$this->entity,$format);
    }

    public function remove(\monsieurgourmand\Bundle\InterfaceBundle\Model\ProspectDownload $download)
    {
        return $this->master->remove($this->url,$download->getIdDownload());
    }
}