<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;

class BusinessLine extends Master
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return BusinessLine
     */
    public function setId(int $id): BusinessLine
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return BusinessLine
     */
    public function setName(string $name): BusinessLine
    {
        $this->name = $name;

        return $this;
    }
}
