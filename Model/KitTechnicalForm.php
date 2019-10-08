<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;

/**
 * Class KitTechnicalForm
 *
 * @author Alice Dahan <alice@monsieurgourmand.com>
 */
class KitTechnicalForm extends Master
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $kit;

    /**
     * @var Document
     */
    private $document;

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getKit(): ?int
    {
        if ($this->kit instanceof Kit) {
            return $this->kit->getIdKit();
        } elseif (is_int($this->kit)) {
            return $this->kit;
        }

        return null;
    }

    /**
     * @param Kit $kit
     *
     * @return KitTechnicalForm
     */
    public function setKit(Kit $kit): KitTechnicalForm
    {
        $this->kit = $kit;

        return $this;
    }

    /**
     * @return Document
     */
    public function getDocument(): ?Document
    {
        return $this->document;
    }

    /**
     * @param Document $document
     *
     * @return KitTechnicalForm
     */
    public function setDocument(Document $document): KitTechnicalForm
    {
        $this->document = $document;

        return $this;
    }
}
