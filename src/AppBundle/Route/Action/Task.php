<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/20/17
 * Time: 6:10 PM
 */

namespace Mgd\Route\Action;

use Mgd\Entity\Action;

class Task
{
    public function __construct(Action $action)
    {
        $this->master = $action->getMaster();
        $this->entity = \Mgd\Entity\Task::class;
        $this->url = "/actions/".$action->getIdAction()."/tasks";
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

    public function post(\Mgd\Entity\Task $task,$format=\Mgd\Mgd::FORMAT_OBJECT)
    {
        return $this->master->post($this->url,$task,$this->entity,$format);
    }

    public function put(\Mgd\Entity\Task $task,$format=\Mgd\Mgd::FORMAT_OBJECT)
    {
        return $this->master->put($this->url,$task->getIdTask(),$task,$this->entity,$format);
    }

    public function remove(\Mgd\Entity\Task $task)
    {
        return $this->master->remove($this->url,$task->getIdTask());
    }


}