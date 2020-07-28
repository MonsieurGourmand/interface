<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;

class Certification extends Master
{
    /** @var integer */
    private $id;

    /** @var string */
    private $name;

    /** @var string */
    private $logoUrl;

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return Certification
     */
    public function setId(int $id): Certification
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return Certification
     */
    public function setName(string $name): Certification
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getLogoUrl(): ?string
    {
        return $this->logoUrl;
    }

    /**
     * @param string $logoUrl
     *
     * @return Certification
     */
    public function setLogoUrl(string $logoUrl): Certification
    {
        $this->logoUrl = $logoUrl;
        return $this;
    }
}
