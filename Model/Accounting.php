<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class Accounting
 */
class Accounting extends Master
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     *
     * @Assert\Length(max=255)
     */
    private $commercialName;

    /**
     * @var Billing
     *
     * @Assert\NotBlank()
     * @Assert\Valid()
     */
    private $billing;

    /**
     * @var Document
     */
    private $kbis;

    /**
     * @var Document
     */
    private $rib;

    /**
     * @var User[]
     */
    private $contacts;

    /**
     * @var string
     */
    private $additionalInformation;

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
     * @return Accounting
     */
    public function setId(int $id): Accounting
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getCommercialName(): ?string
    {
        return $this->commercialName;
    }

    /**
     * @param string $commercialName
     *
     * @return Accounting
     */
    public function setCommercialName(string $commercialName): Accounting
    {
        $this->commercialName = $commercialName;

        return $this;
    }

    /**
     * @return Billing
     */
    public function getBilling(): ?Billing
    {
        return $this->billing;
    }

    /**
     * @param Billing $billing
     *
     * @return Accounting
     */
    public function setBilling(Billing $billing): Accounting
    {
        $this->billing = $billing;

        return $this;
    }

    /**
     * @return Document
     */
    public function getKbis(): ?Document
    {
        return $this->kbis;
    }

    /**
     * @param Document $kbis
     *
     * @return Accounting
     */
    public function setKbis(Document $kbis): Accounting
    {
        $this->kbis = $kbis;

        return $this;
    }

    /**
     * @return Document
     */
    public function getRib(): ?Document
    {
        return $this->rib;
    }

    /**
     * @param Document $rib
     *
     * @return Accounting
     */
    public function setRib(Document $rib): Accounting
    {
        $this->rib = $rib;

        return $this;
    }

    /**
     * @return User[]
     */
    public function getContacts(): ?array
    {
        return $this->contacts;
    }

    /**
     * @param User[] $contacts
     *
     * @return Accounting
     */
    public function setContacts(array $contacts): Accounting
    {
        $this->contacts = $contacts;

        return $this;
    }

    /**
     * @return string
     */
    public function getAdditionalInformation(): ?string
    {
        return $this->additionalInformation;
    }

    /**
     * @param string $additionalInformation
     *
     * @return Accounting
     */
    public function setAdditionalInformation(string $additionalInformation): Accounting
    {
        $this->additionalInformation = $additionalInformation;

        return $this;
    }
}
