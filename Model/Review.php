<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;

use DateTime;

/**
 * Class Review
 */
class Review
{
    /** @var int */
    private $grade;

    /** @var string */
    private $comment;

    /** @var DateTime */
    private $date;

    /** @var User */
    private $author;

    /**
     * @return int
     */
    public function getGrade(): ?int
    {
        return $this->grade;
    }

    /**
     * @param int $grade
     *
     * @return Review
     */
    public function setGrade(int $grade): Review
    {
        $this->grade = $grade;
        return $this;
    }

    /**
     * @return string
     */
    public function getComment(): ?string
    {
        return $this->comment;
    }

    /**
     * @param string $comment
     *
     * @return Review
     */
    public function setComment(?string $comment): Review
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getDate(): ?DateTime
    {
        return $this->date;
    }

    /**
     * @param DateTime $date
     *
     * @return Review
     */
    public function setDate(DateTime $date): Review
    {
        $this->date = $date;
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
     *
     * @return Review
     */
    public function setAuthor(User $author): Review
    {
        $this->author = $author;
        return $this;
    }
}
