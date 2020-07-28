<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;

use DateTime;

class Invitation extends Master
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $code;

    /**
     * @var DateTime
     */
    private $createdAt;

    /**
     * @var DateTime
     */
    private $activatedAt;

    /**
     * @var User
     */
    private $user;

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * @param string $code
     *
     * @return Invitation
     */
    public function setCode(string $code): Invitation
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt(): ?DateTime
    {
        return $this->createdAt;
    }

    /**
     * @param DateTime $createdAt
     *
     * @return Invitation
     */
    public function setCreatedAt(DateTime $createdAt): Invitation
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getActivatedAt(): ?DateTime
    {
        return $this->activatedAt;
    }

    /**
     * @param DateTime $activatedAt
     *
     * @return Invitation
     */
    public function setActivatedAt(DateTime $activatedAt): Invitation
    {
        $this->activatedAt = $activatedAt;
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
     * @return Invitation
     */
    public function setUser(User $user): Invitation
    {
        $this->user = $user;
        return $this;
    }
}
