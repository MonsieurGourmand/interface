<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/20/17
 * Time: 6:08 PM
 */

namespace monsieurgourmand\Bundle\InterfaceBundle\Route;



use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;

class Category
{
    private $master;
    private $entity;
    private $url;

    public function __construct(MGD $master)
    {
        $this->master = $master;
        $this->entity = \monsieurgourmand\Bundle\InterfaceBundle\Model\Category::class;
        $this->url = '/categories';
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

    public function post(\monsieurgourmand\Bundle\InterfaceBundle\Model\Category $category,$format=MGD::FORMAT_OBJECT)
    {
        return $this->master->post($this->url,$category,$this->entity,$format);
    }

    public function put(\monsieurgourmand\Bundle\InterfaceBundle\Model\Category $category,$format=MGD::FORMAT_OBJECT)
    {
        return $this->master->put($this->url,$category->getIdcategory(),$category,$this->entity,$format);
    }

    public function remove(\monsieurgourmand\Bundle\InterfaceBundle\Model\Category $category)
    {
        return $this->master->remove($this->url,$category->getIdcategory());
    }
}