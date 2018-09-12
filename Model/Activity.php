<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;


use monsieurgourmand\Bundle\InterfaceBundle\Interfaces\ActivityInterface;

class Activity extends Master implements ActivityInterface
{
    /**
     * @var integer
     *
     */
    private $idActivity;

    /**
     * @var Package
     *
     */
    private $package;

    /**
     * @var Event
     *
     */
    private $event;

    /**
     * @var \DateTime
     *
     */
    private $activityDate;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $contentType;

    /**
     * @var string
     */
    private $content;

    /**
     * @var integer
     *
     */
    private $activityType;

    /**
     * @var integer
     *
     */
    private $creatorType;

    /**
     * @var Document
     */
    private $document;

    /**
     * @var Operation
     */
    private $operation;

    /**
     * @var boolean
     */
    private $favorite;


    /**
     * @var User
     */
    private $user;

    /**
     * @return int
     */
    public function getIdActivity()
    {
        return $this->idActivity;
    }

    /**
     * @param int $idActivity
     */
    public function setIdActivity($idActivity)
    {
        $this->idActivity = $idActivity;
    }

    /**
     * @return Package
     */
    public function getPackage()
    {
        return $this->package;
    }

    /**
     * @param Package $package
     */
    public function setPackage($package)
    {
        $this->package = $package;
    }

    /**
     * @return Event
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * @param Event $event
     */
    public function setEvent($event)
    {
        $this->event = $event;
    }

    /**
     * @return string
     */
    public function getActivityDate()
    {
        return $this->activityDate;
    }

    /**
     * @param string $activityDate
     */
    public function setActivityDate($activityDate)
    {
        $this->activityDate = $activityDate;
    }

    /**
     * @return Document
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * @param Document $document
     * @return Activity
     */
    public function setDocument($document)
    {
        $this->document = $document;
        return $this;
    }

    /**
     * @return Operation
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * @param Operation $operation
     * @return Activity
     */
    public function setOperation($operation)
    {
        $this->operation = $operation;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return Activity
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * @param string $contentType
     * @return Activity
     */
    public function setContentType($contentType)
    {
        $this->contentType = $contentType;
        return $this;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param string $content
     * @return Activity
     */
    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @return int
     */
    public function getActivityType()
    {
        return $this->activityType;
    }

    /**
     * @param int $activityType
     * @return Activity
     */
    public function setActivityType($activityType)
    {
        $this->activityType = $activityType;
        return $this;
    }

    /**
     * @return int
     */
    public function getCreatorType()
    {
        return $this->creatorType;
    }

    /**
     * @param int $creatorType
     * @return Activity
     */
    public function setCreatorType($creatorType)
    {
        $this->creatorType = $creatorType;
        return $this;
    }

    /**
     * @return bool
     */
    public function isFavorite()
    {
        return $this->favorite;
    }

    /**
     * @param bool $favorite
     * @return Activity
     */
    public function setFavorite($favorite)
    {
        $this->favorite = $favorite;
        return $this;
    }

    /**
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param User $user
     * @return Activity
     */
    public function setUser($user)
    {
        $this->user = $user;
        return $this;
    }

}
