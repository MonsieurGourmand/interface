<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Route\Supplier;

use monsieurgourmand\Bundle\InterfaceBundle\Model\Supplier;
use monsieurgourmand\Bundle\InterfaceBundle\Model\User as UserModel;
use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;

/**
 * Class AccountingContact
 */
class AccountingContact
{
    /** @var string */
    private $entity;
    /** @var string */
    private $url;
    /** @var MGD */
    private $master;
    /** @var Supplier */
    private $supplier;

    /**
     * AccountingContact constructor.
     * @param Supplier $supplier
     */
    public function __construct(Supplier $supplier)
    {
        $this->master = $supplier->getMaster();
        $this->entity = UserModel::class;
        $this->supplier = $supplier;
    }

    /**
     * @param int $contactId
     * @param string $format
     * @return UserModel
     */
    public function get(int $contactId, $format = MGD::FORMAT_OBJECT): UserModel
    {
        $this->url = "/suppliers/" . $this->supplier->getIdSupplier() . "/accountings/" . $this->supplier->getAccounting()->getId() . "/contacts";

        return $this->master->get($this->url, $contactId, $this->entity, $format);
    }

    /**
     * @param UserModel $contact
     * @param string $format
     * @return UserModel
     */
    public function post(UserModel $contact, $format = MGD::FORMAT_OBJECT): UserModel
    {
        $this->url = "/suppliers/" . $this->supplier->getIdSupplier() . "/accountings/" . $this->supplier->getAccounting()->getId() . "/contacts";

        return $this->master->post($this->url, $contact, $this->entity, $format);
    }

    /**
     * @param UserModel $contact
     * @param string $format
     * @return UserModel
     */
    public function put(UserModel $contact, $format = MGD::FORMAT_OBJECT): UserModel
    {
        $this->url = "/suppliers/" . $this->supplier->getIdSupplier() . "/accountings/" . $this->supplier->getAccounting()->getId() . "/contacts";

        return $this->master->put($this->url, $contact->getId(), $contact, $this->entity, $format);
    }
}
