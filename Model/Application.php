<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;

class Application extends Master
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
     * @return Application
     */
    public function setId(int $id): Application
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
     * @return Allergen
     */
    public function setName(string $name): Allergen
    {
        $this->name = $name;
        return $this;
    }
}
