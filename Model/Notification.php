<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;

use DateTime;

class Notification extends Master
{
    /** @var DateTime */
    private $lastDate;

    /** @var integer */
    private $nbrMessages;

    /** @var string */
    private $firstName;

    /** @var string */
    private $lastName;

    /** @var integer */
    private $channelId;

    /** @var string */
    private $channelName;

    /**
     * @return DateTime
     */
    public function getLastDate(): ?DateTime
    {
        return $this->lastDate;
    }

    /**
     * @param DateTime $lastDate
     * @return Notification
     */
    public function setLastDate(DateTime $lastDate): Notification
    {
        $this->lastDate = $lastDate;
        return $this;
    }

    /**
     * @return int
     */
    public function getNbrMessages(): ?int
    {
        return $this->nbrMessages;
    }

    /**
     * @param int $nbrMessages
     * @return Notification
     */
    public function setNbrMessages(int $nbrMessages): Notification
    {
        $this->nbrMessages = $nbrMessages;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     * @return Notification
     */
    public function setFirstName(string $firstName): Notification
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     * @return Notification
     */
    public function setLastName(string $lastName): Notification
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @return int
     */
    public function getChannelId(): ?int
    {
        return $this->channelId;
    }

    /**
     * @param int $channelId
     * @return Notification
     */
    public function setChannelId(int $channelId): Notification
    {
        $this->channelId = $channelId;
        return $this;
    }

    /**
     * @return string
     */
    public function getChannelName(): ?string
    {
        return $this->channelName;
    }

    /**
     * @param string $channelName
     * @return Notification
     */
    public function setChannelName(string $channelName): Notification
    {
        $this->channelName = $channelName;
        return $this;
    }
}
