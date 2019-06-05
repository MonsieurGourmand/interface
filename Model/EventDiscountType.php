<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;

class EventDiscountType extends Master
{
    /** @var int */
    private $id;

    /** @var string */
    private $designation;

    /** @var int */
    private $type;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return EventDiscountType
     */
    public function setId(int $id): EventDiscountType
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getDesignation()
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
    public function getType()
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
