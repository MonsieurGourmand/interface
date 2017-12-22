<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/20/17
 * Time: 6:10 PM
 */

namespace monsieurgourmand\Bundle\InterfaceBundle\Route;



use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;

class Event
{

    private $master;
    private $entity;
    private $url;

    public function __construct(MGD $master)
    {
        $this->master = $master;
        $this->entity = \monsieurgourmand\Bundle\InterfaceBundle\Model\Event::class;
        $this->url = '/events';
    }

    public function getAll($startDate=null,$endDate=null,$format=MGD::FORMAT_OBJECT)
    {
        $params = array();
        if($startDate && $endDate)
        {
            $params['startDate'] = $startDate;
            $params['endDate'] = $endDate;
        }

        return $this->master->getAll($this->url, $this->entity,$params,$format);
    }

    public function get($id,$format=MGD::FORMAT_OBJECT)
    {
        return $this->master->get($this->url,$id,$this->entity,$format);
    }
}