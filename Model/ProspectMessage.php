<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;

use DateTime;

class ProspectMessage extends Master
{
    /**
     * @var int
     */
    private $idMessage;

    /**
     * @var string
     */
    private $message;

    /**
     * @var DateTime
     */
    private $date;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $phone;

    /**
     * @return int
     */
    public function getIdMessage(): ?int
    {
        return $this->idMessage;
    }

    /**
     * @param int $idMessage
     * @return ProspectMessage
     */
    public function setIdMessage(int $idMessage): ProspectMessage
    {
        $this->idMessage = $idMessage;
        return $this;
    }

    /**
     * @return string
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * @param string $message
     * @return ProspectMessage
     */
    public function setMessage(string $message): ProspectMessage
    {
        $this->message = $message;

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
     * @return ProspectMessage
     */
    public function setDate(DateTime $date): ProspectMessage
    {
        $this->date = $date;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string $email
     *
     * @return ProspectMessage
     */
    public function setEmail(string $email): ProspectMessage
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return string
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     *
     * @return ProspectMessage
     */
    public function setPhone(string $phone): ProspectMessage
    {
        $this->phone = $phone;

        return $this;
    }
}
