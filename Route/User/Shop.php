<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/20/17
 * Time: 6:10 PM
 */

namespace monsieurgourmand\Bundle\InterfaceBundle\Route\User;

use monsieurgourmand\Bundle\InterfaceBundle\Model\User;
use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;
use monsieurgourmand\Bundle\InterfaceBundle\Model\Shop as ShopModel;

class Shop
{
    private $entity;
    private $url;
    private $master;

    public function __construct(User $user)
    {
        $this->master = $user->getMaster();
        $this->entity = ShopModel::class;
        $this->url = "/users/" . $user->getId() . "/shops";
    }

    public function getAll(array $params = [], string $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->getAll($this->url, $this->entity, $params, $format);
    }

    public function get(int $id, string $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->get($this->url, $id, $this->entity, $format);
    }
}
