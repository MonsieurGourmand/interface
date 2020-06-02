<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Route\User;

use monsieurgourmand\Bundle\InterfaceBundle\Model\User;
use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;
use monsieurgourmand\Bundle\InterfaceBundle\Model\Shop as ShopModel;

class Shop
{
    /** @var string */
    private $entity;

    /** @var string */
    private $url;

    /** @var MGD */
    private $master;

    /**
     * Shop constructor.
     *
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->master = $user->getMaster();
        $this->entity = ShopModel::class;
        $this->url = "/users/" . $user->getId() . "/shops";
    }

    /**
     * @param array $params
     * @param string $format
     * @return ShopModel[]
     */
    public function getAll(array $params = [], string $format = MGD::FORMAT_OBJECT): array
    {
        return $this->master->getAll($this->url, $this->entity, $params, $format);
    }

    /**
     * @param int $id
     * @param string $format
     * @return ShopModel
     */
    public function get(int $id, string $format = MGD::FORMAT_OBJECT): ShopModel
    {
        /** @var ShopModel $shop */
        $shop = $this->master->get($this->url, $id, $this->entity, $format);

        return $shop;
    }

    /**
     * @param ShopModel $shop
     * @param string $format
     * @return ShopModel
     */
    public function put(ShopModel $shop, string $format = MGD::FORMAT_OBJECT): ShopModel
    {
        /** @var ShopModel $shop */
        $shop = $this->master->put($this->url, $shop->getId(), $shop, $this->entity, $format);

        return $shop;
    }
}
