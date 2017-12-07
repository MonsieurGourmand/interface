<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/20/17
 * Time: 6:10 PM
 */

namespace Mgd\Route\Action\Task;

use Mgd\Entity\Task;

class Flux
{
    public function __construct(Task $task)
    {
        $this->master = $task->getMaster();
        $this->entity = \Mgd\Entity\Flux::class;
        $this->url = "/actions/".$task->getAction()->getIdAction()."/tasks/".$task->getIdTask()."/fluxes";
    }

    public function getAll($format=\Mgd\Mgd::FORMAT_OBJECT)
    {
        $params = array();
        return $this->master->getAll($this->url, $this->entity,$params,$format);
    }

    public function get($id,$format=\Mgd\Mgd::FORMAT_OBJECT)
    {
        return $this->master->get($this->url,$id,$this->entity,$format);
    }

    public function post(\Mgd\Entity\Flux $flux,$format=\Mgd\Mgd::FORMAT_OBJECT)
    {
        return $this->master->post($this->url,$flux,$this->entity,$format);
    }

    public function put(\Mgd\Entity\Flux $flux,$format=\Mgd\Mgd::FORMAT_OBJECT)
    {
        return $this->master->put($this->url,$flux->getIdFlux(),$flux,$this->entity,$format);
    }

    public function remove(\Mgd\Entity\Flux $flux)
    {
        return $this->master->remove($this->url,$flux->getIdFlux());
    }


}