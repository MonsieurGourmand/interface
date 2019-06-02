<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;

class EventDiscountType extends Master
{
    /** @var int */
    private $idEventDiscountType;

    /** @var string */
    private $designation;

    /** @var int */
    private $type;

    /**
     * @return int
     */
    public function getIdEventDiscountType(): int
    {
        return $this->idEventDiscountType;
    }

    /**
     * @param int $idEventDiscountType
     * @return EventDiscountType
     */
    public function setIdEventDiscountType(int $idEventDiscountType): EventDiscountType
    {
        $this->idEventDiscountType = $idEventDiscountType;
        return $this;
    }

    /**
     * @return string
     */
    public function getDesignation(): string
    {
        return $this->designation;
    }

    /**
     * @param string $designation
     * @return EventDiscountType
     */
    public function setDesignation(string $designation): EventDiscountType
    {
        $this->designation = $designation;
        return $this;
    }

    /**
     * @return int
     */
    public function getType(): int
    {
        return $this->type;
    }

    /**
     * @param int $type
     * @return EventDiscountType
     */
    public function setType(int $type): EventDiscountType
    {
        $this->type = $type;
        return $this;
    }
}
