<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Route\Quote;

use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;

class ValidatedQuote
{
    private $entity;
    private $url;
    private $master;

    public function __construct(\monsieurgourmand\Bundle\InterfaceBundle\Model\Quote $quote)
    {
        $this->master = $quote->getMaster();
        $this->url = "/operations/" . $quote->getOperation()->getIdOperation() . "/quotes/" . $quote->getId() . '/validatedquotes';
    }

    public function post(\monsieurgourmand\Bundle\InterfaceBundle\Model\Quote $quote, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->post($this->url, $quote, $this->entity, $format);
    }
}
