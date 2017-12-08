<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/20/17
 * Time: 6:10 PM
 */

namespace monsieurgourmand\Bundle\InterfaceBundle\Route\Action\Task;


use monsieurgourmand\Bundle\InterfaceBundle\Model\Task;
use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;

class Flux
{
    private $entity;
    private $url;
    private $master;

    public function __construct(Task $task)
    {
        $this->master = $task->getMaster();
        $this->entity = \monsieurgourmand\Bundle\InterfaceBundle\Model\Flux::class;
        $this->url = "/actions/".$task->getAction()->getIdAction()."/tasks/".$task->getIdTask()."/fluxes";
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

    public function post(\monsieurgourmand\Bundle\InterfaceBundle\Model\Flux $flux,$format=MGD::FORMAT_OBJECT)
    {
        return $this->master->post($this->url,$flux,$this->entity,$format);
    }

    public function put(\monsieurgourmand\Bundle\InterfaceBundle\Model\Flux $flux,$format=MGD::FORMAT_OBJECT)
    {
        return $this->master->put($this->url,$flux->getIdFlux(),$flux,$this->entity,$format);
    }

    public function remove(\monsieurgourmand\Bundle\InterfaceBundle\Model\Flux $flux)
    {
        return $this->master->remove($this->url,$flux->getIdFlux());
    }


}