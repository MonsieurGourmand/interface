<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Route\Quote;

use monsieurgourmand\Bundle\InterfaceBundle\Model\Quote;
use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;

class ValidatedQuote
{
    private $entity;
    private $url;
    private $master;

    public function __construct(Quote $quote)
    {
        $this->master = $quote->getMaster();
        $this->url = "/events/" . $quote->getEvent()->getIdEvent() . "/quotes/" . $quote->getId() . '/validatedquotes';
        $this->entity = Quote::class;
    }

    public function post(Quote $quote, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->post($this->url, $quote, $this->entity, $format);
    }
}
