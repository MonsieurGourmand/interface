<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/20/17
 * Time: 6:10 PM
 */

namespace monsieurgourmand\Bundle\InterfaceBundle\Route\Product;


use monsieurgourmand\Bundle\InterfaceBundle\Model\Product;
use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;

class Document
{
    private $entity;
    private $url;
    private $master;

    public function __construct(Product $product)
    {
        $this->master = $product->getMaster();
        $this->entity = \monsieurgourmand\Bundle\InterfaceBundle\Model\Document::class;
        if ($product->getSupplier())
            $this->url = "/suppliers/" . $product->getSupplier()->getIdSupplier() . "/products/" . $product->getIdProduct() . "/documents";
        else
            $this->url = null;
    }

    public function post(\monsieurgourmand\Bundle\InterfaceBundle\Model\Document $document, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->post($this->url, $document, $this->entity, $format);
    }

    public function remove(\monsieurgourmand\Bundle\InterfaceBundle\Model\Document $document)
    {
        return $this->master->remove($this->url, $document->getIdDocument());
    }

}