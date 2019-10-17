<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;

use DateTime;

class Message extends Master
{
    /** @var integer */
    private $id;

    /** @var string */
    private $content;

    /** @var Channel */
    private $channel;

    /** @var DateTime */
    private $createAt;

    /** @var User */
    private $author;

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Message
     */
    public function setId(int $id): Message
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * @param string $content
     * @return Message
     */
    public function setContent(string $content): Message
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @return Channel
     */
    public function getChannel(): ?Channel
    {
        return $this->channel;
    }

    /**
     * @param Channel $channel
     * @return Message
     */
    public function setChannel(Channel $channel): Message
    {
        $this->channel = $channel;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getCreateAt(): ?DateTime
    {
        return $this->createAt;
    }

    /**
     * @param DateTime $createAt
     * @return Message
     */
    public function setCreateAt(DateTime $createAt): Message
    {
        $this->createAt = $createAt;
        return $this;
    }

    /**
     * @return User
     */
    public function getAuthor(): ?User
    {
        return $this->author;
    }

    /**
     * @param User $author
     * @return Message
     */
    public function setAuthor(User $author): Message
    {
        $this->author = $author;
        return $this;
    }
}
