<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Route\Quote;

use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;
use monsieurgourmand\Bundle\InterfaceBundle\Model\Quote;
use monsieurgourmand\Bundle\InterfaceBundle\Model\Invoice as InvoiceModel;

class Invoice
{
    private $entity;
    private $url;
    private $master;

    public function __construct(Quote $quote)
    {
        $this->master = $quote->getMaster();
        $this->entity = InvoiceModel::class;
        $this->url = "/events/" . $quote->getEvent()->getIdEvent() . "/quotes/" . $quote->getId() . '/invoices';
    }

    public function getAll(string $format = MGD::FORMAT_OBJECT, $params = [])
    {
        return $this->master->getAll($this->url, $this->entity, $params, $format);
    }

    public function get(int $id, string $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->get($this->url, $id, $this->entity, $format);
    }

    public function post(InvoiceModel $invoice, string $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->post($this->url, $invoice, $this->entity, $format);
    }

    public function put(InvoiceModel $invoice, string $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->put($this->url, $invoice->getId(), $invoice, $this->entity, $format);
    }

    public function remove(int $invoiceId)
    {
        $this->master->remove($this->url, $invoiceId);
    }
}
