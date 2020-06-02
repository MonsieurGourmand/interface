<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Route\Customer;

use monsieurgourmand\Bundle\InterfaceBundle\Model\Customer;
use monsieurgourmand\Bundle\InterfaceBundle\Model\User;
use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;

/**
 * Class Contact
 */
class Contact
{
    /** @var MGD  */
    private $master;

    /** @var string  */
    private $entity;

    /** @var string  */
    private $url;

    /** @var Customer */
    private $customer;

    /**
     * Contact constructor.
     * @param Customer $customer
     */
    public function __construct(Customer $customer)
    {
        $this->master = $customer->getMaster();
        $this->entity = User::class;
        $this->url = '/contacts';
        $this->customer = $customer;
    }

    /**
     * @param array $params
     * @param string $format
     * @return array|false|string|void
     */
    public function getAll($params = [], $format = MGD::FORMAT_OBJECT)
    {
        $params['customer'] = $this->customer->getIdCustomer();

        return $this->master->getAll($this->url, $this->entity, $params, $format);
    }

    /**
     * @param int $contactId
     * @param string $format
     * @return array|false|string|void
     */
    public function get(int $contactId, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->get($this->url, $contactId, $this->entity, $format);
    }

    /**
     * @param User $user
     * @param string $format
     * @return array|false|string|void
     */
    public function post(User $user, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->post($this->url, $user, $this->entity, $format);
    }

    /**
     * @param User $user
     * @param string $format
     * @return array|false|string|void
     */
    public function put(User $user, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->put($this->url, $user->getId(), $user, $this->entity, $format);
    }
}
