<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/20/17
 * Time: 6:08 PM
 */

namespace monsieurgourmand\Bundle\InterfaceBundle\Route;


use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;

class User
{
    private $master;
    private $entity;
    private $url;

    public function __construct(MGD $master)
    {
        $this->master = $master;
        $this->entity = \monsieurgourmand\Bundle\InterfaceBundle\Model\User::class;
        $this->url = '/users';
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

    public function post(\monsieurgourmand\Bundle\InterfaceBundle\Model\User $user,$format=MGD::FORMAT_OBJECT)
    {
        return $this->master->post($this->url,$user,$this->entity,$format);
    }

    public function put(\monsieurgourmand\Bundle\InterfaceBundle\Model\User $user,$format=MGD::FORMAT_OBJECT)
    {
        return $this->master->put($this->url,$user->getId(),$user,$this->entity,$format);
    }

    public function remove(\monsieurgourmand\Bundle\InterfaceBundle\Model\User $user)
    {
        return $this->master->remove($this->url,$user->getId());
    }
}