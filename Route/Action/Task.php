<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/20/17
 * Time: 6:10 PM
 */

namespace monsieurgourmand\Bundle\InterfaceBundle\Route\Action;


use monsieurgourmand\Bundle\InterfaceBundle\Model\Action;
use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;

class Task
{
    private $entity;
    private $url;
    private $master;

    public function __construct(Action $action)
    {
        $this->master = $action->getMaster();
        $this->entity = \monsieurgourmand\Bundle\InterfaceBundle\Model\Task::class;
        $this->url = "/actions/" . $action->getIdAction() . "/tasks";
    }

    public function getAll($format = MGD::FORMAT_OBJECT)
    {
        $params = array();
        return $this->master->getAll($this->url, $this->entity, $params, $format);
    }

    public function get($id, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->get($this->url, $id, $this->entity, $format);
    }

    public function post(\monsieurgourmand\Bundle\InterfaceBundle\Model\Task $task, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->post($this->url, $task, $this->entity, $format);
    }

    public function put(\monsieurgourmand\Bundle\InterfaceBundle\Model\Task $task, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->put($this->url, $task->getIdTask(), $task, $this->entity, $format);
    }

    public function remove(\monsieurgourmand\Bundle\InterfaceBundle\Model\Task $task)
    {
        return $this->master->remove($this->url, $task->getIdTask());
    }


}