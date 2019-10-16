<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;

/**
 * Class KitPicture
 *
 * @author Alice Dahan <alice@monsieurgourmand.com>
 */
class KitPicture extends Master
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
     * @var bool
     */
    private $default = false;

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
     * @return KitPicture
     */
    public function setKit(Kit $kit): KitPicture
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
     * @return KitPicture
     */
    public function setDocument(Document $document): KitPicture
    {
        $this->document = $document;

        return $this;
    }

    /**
     * @return bool
     */
    public function isDefault(): bool
    {
        return $this->default;
    }

    /**
     * @param bool $default
     *
     * @return KitPicture
     */
    public function setDefault(bool $default): KitPicture
    {
        $this->default = $default;

        return $this;
    }
}
