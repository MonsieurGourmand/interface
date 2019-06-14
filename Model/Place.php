<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;

use Symfony\Component\Validator\Constraints as Assert;

class Place extends Master
{
    /**
     * @var int
     *
     */
    private $id;

    /**
     * @var string
     *
     * @Assert\NotBlank()
     */
    private $address;

    /**
     * @var string
     *
     * @Assert\NotBlank()
     */
    private $country;

    /**
     * @var string
     *
     * @Assert\NotBlank()
     * @Assert\Length(min=5, max=5)
     */
    private $zipCode;

    /**
     * @var string
     *
     * @Assert\NotBlank()
     */
    private $city;

    /**
     * @var string
     *
     * @Assert\NotBlank()
     */
    private $recipient;

    /**
     * @var string
     *
     */
    private $reference;

    /**
     * @var string
     *
     * @Assert\Email()
     */
    private $mail;

    /**
     * @var string|null
     *
     */
    private $phone;

    /**
     * @var Customer
     */
    private $customer;

    /**
     * @var Shipper
     */
    private $shipper;

    /**
     * @var string
     *
     * @Assert\NotBlank()
     */
    private $corporateName;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string $address
     * @return Place
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     * @return Place
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return string
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * @param string $zipCode
     * @return Place
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return Place
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string
     */
    public function getRecipient()
    {
        return $this->recipient;
    }

    /**
     * @param string $recipient
     * @return Place
     */
    public function setRecipient($recipient)
    {
        $this->recipient = $recipient;
        return $this;
    }

    /**
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param string $reference
     * @return Place
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @param string $mail
     * @return Place
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string|null $phone
     * @return Place
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return Customer
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @param Customer $customer
     * @return Place
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;
        return $this;
    }

    /**
     * @return Shipper
     */
    public function getShipper()
    {
        return $this->shipper;
    }

    /**
     * @param Shipper $shipper
     * @return Place
     */
    public function setShipper($shipper)
    {
        $this->shipper = $shipper;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCorporateName()
    {
        return $this->corporateName;
    }

    /**
     * @param string $corporateName
     * @return Place
     */
    public function setCorporateName($corporateName)
    {
        $this->corporateName = $corporateName;
        return $this;
    }
}
