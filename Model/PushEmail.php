<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;

use DateTime;

/**
 * Push
 */
class PushEmail
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="created", type="datetime")
     */
    private $created;

    /**
     * PushEmail constructor.
     */
    public function __construct()
    {
        $this->created = new DateTime();
    }

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return DateTime
     */
    public function getCreated(): DateTime
    {
        return $this->created;
    }

    /**
     * @param DateTime $created
     * @return PushEmail
     */
    public function setCreated(DateTime $created): PushEmail
    {
        $this->created = $created;
        return $this;
    }
}
