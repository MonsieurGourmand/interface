<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;

/**
 * Class MarketplacePlan
 */
class MarketplacePlan extends Master
{
    /** @var int */
    private $id;

    /** @var string */
    private $name;

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
     * @return MarketplacePlan
     */
    public function setId(int $id): MarketplacePlan
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
     * @return MarketplacePlan
     */
    public function setName(string $name): MarketplacePlan
    {
        $this->name = $name;

        return $this;
    }
}
