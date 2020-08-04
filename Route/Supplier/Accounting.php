<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Route\Supplier;

use monsieurgourmand\Bundle\InterfaceBundle\Model\Accounting as AccountingModel;
use monsieurgourmand\Bundle\InterfaceBundle\Model\Supplier;
use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;

/**
 * Class Accounting
 */
class Accounting
{
    /** @var string */
    private $entity;
    /** @var string */
    private $url;
    /** @var MGD */
    private $master;

    /**
     * Accounting constructor.
     * @param Supplier $supplier
     */
    public function __construct(Supplier $supplier)
    {
        $this->master = $supplier->getMaster();
        $this->entity = AccountingModel::class;
        $this->url = "/suppliers/" . $supplier->getIdSupplier() . "/accountings";
    }

    /**
     * @param int $accountingId
     * @param string $format
     * @return AccountingModel
     */
    public function get(int $accountingId, $format = MGD::FORMAT_OBJECT): AccountingModel
    {
        return $this->master->get($this->url, $accountingId, $this->entity, $format);
    }

    /**
     * @param AccountingModel $accounting
     * @param string $format
     * @return AccountingModel
     */
    public function post(AccountingModel $accounting, $format = MGD::FORMAT_OBJECT): AccountingModel
    {
        return $this->master->post($this->url, $accounting, $this->entity, $format);
    }

    /**
     * @param AccountingModel $accounting
     * @param string $format
     * @return AccountingModel
     */
    public function put(AccountingModel $accounting, $format = MGD::FORMAT_OBJECT): AccountingModel
    {
        return $this->master->put($this->url, $accounting->getId(), $accounting, $this->entity, $format);
    }
}
