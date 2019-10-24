<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;

use DateTime;

class Channel extends Master
{
    /** @var integer */
    private $id;

    /** @var string */
    private $name;

    /** @var DateTime */
    private $createdAt;

    /** @var integer */
    private $entityId;

    /** @var string */
    private $discr;

    /** @var bool */
    private $system;

    /** @var array */
    private $subscribers;

    /** @var bool */
    private $unread;

    /**
     * @var \monsieurgourmand\Bundle\InterfaceBundle\Route\Channel\AddSub
     */
    public $addSub;

    /**
     * @var \monsieurgourmand\Bundle\InterfaceBundle\Route\Channel\AddTeam
     */
    public $addTeam;

    /**
     * @var \monsieurgourmand\Bundle\InterfaceBundle\Route\Channel\Subscriber
     */
    public $subscribersEndpoint;

    /**
     * @var \monsieurgourmand\Bundle\InterfaceBundle\Route\Channel\Message
     */
    public $messages;

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Channel
     */
    public function setId(int $id): Channel
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
     * @return Channel
     */
    public function setName(string $name): Channel
    {
        $this->name = $name;
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
     * @return Channel
     */
    public function setCreatedAt(DateTime $createdAt): Channel
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * @return int
     */
    public function getEntityId(): ?int
    {
        return $this->entityId;
    }

    /**
     * @param int $entityId
     * @return Channel
     */
    public function setEntityId(int $entityId): Channel
    {
        $this->entityId = $entityId;
        return $this;
    }

    /**
     * @return string
     */
    public function getDiscr(): ?string
    {
        return $this->discr;
    }

    /**
     * @param string $discr
     * @return Channel
     */
    public function setDiscr(string $discr): Channel
    {
        $this->discr = $discr;
        return $this;
    }

    /**
     * @return bool
     */
    public function isSystem(): bool
    {
        return $this->system;
    }

    /**
     * @param bool $system
     * @return Channel
     */
    public function setSystem(bool $system): Channel
    {
        $this->system = $system;
        return $this;
    }

    /**
     * @return array
     */
    public function getSubscribers(): array
    {
        return $this->subscribers;
    }

    /**
     * @param array $subscribers
     * @return Channel
     */
    public function setSubscribers(array $subscribers): Channel
    {
        $this->subscribers = $subscribers;
        return $this;
    }

    /**
     * @return bool
     */
    public function isUnread(): bool
    {
        return $this->unread;
    }

    /**
     * @param bool $unread
     * @return Channel
     */
    public function setUnread(bool $unread): Channel
    {
        $this->unread = $unread;
        return $this;
    }
}
