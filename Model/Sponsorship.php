<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;

use DateTime;

class Sponsorship extends Master
{
    /** @var int */
    private $id;

    /** @var User */
    private $sponsor;

    /** @var User */
    private $user;

    /** @var DateTime */
    private $created;

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
     * @return Sponsorship
     */
    public function setId(int $id): Sponsorship
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return User
     */
    public function getSponsor(): ?User
    {
        return $this->sponsor;
    }

    /**
     * @param User $sponsor
     *
     * @return Sponsorship
     */
    public function setSponsor(User $sponsor): Sponsorship
    {
        $this->sponsor = $sponsor;

        return $this;
    }

    /**
     * @return User
     */
    public function getUser(): ?User
    {
        return $this->user;
    }

    /**
     * @param User $user
     *
     * @return Sponsorship
     */
    public function setUser(User $user): Sponsorship
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getCreated(): ?DateTime
    {
        return $this->created;
    }

    /**
     * @param DateTime $created
     *
     * @return Sponsorship
     */
    public function setCreated(DateTime $created): Sponsorship
    {
        $this->created = $created;

        return $this;
    }
}
