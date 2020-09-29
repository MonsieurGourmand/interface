<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/19/17
 * Time: 4:59 PM
 */

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;

class User extends Master
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $email
     */
    private $email;

    /**
     * @var bool $enabled
     */
    private $enabled;

    /**
     * @var string $firstName
     */
    private $firstName;

    /**
     * @var string $lastName
     */
    private $lastName;

    /**
     * @var string $phone
     */
    private $phone;

    /**
     * @var string
     */
    private $job;

    /**
     * @var string $mobile
     */
    private $mobile;

    /**
     * @var string $address
     */
    private $address;

    /**
     * @var bool $notification
     */
    private $notification;

    /**
     * @var bool $activation
     */
    private $activation;

    /**
     * @var array
     */
    private $roles;

    /**
     * @var int
     */
    private $score;

    /** @var array */
    private $applications;

    /**
     * @var array
     */
    private $places;

    /**
     * @var Customer
     */
    public $customerFirm;

    /**
     * @var Supplier
     */
    public $supplierFirm;

    /**
     * @var Invitation
     */
    private $invitation;

    /**
     * @var string
     */
    private $plainPassword;

    /**
     * @var BusinessLine
     */
    private $businessLine;

    /**
     * @var string
     */
    private $sponsorshipCode;

    /**
     * @var Sponsorship
     */
    private $sponsorship;

    /**
     * @var \monsieurgourmand\Bundle\InterfaceBundle\Route\User\Shop
     */
    public $shops;

    /**
     * @var \monsieurgourmand\Bundle\InterfaceBundle\Route\User\SponsoredSales
     */
    public $sponsoredSales;

    /**
     * @var \monsieurgourmand\Bundle\InterfaceBundle\Route\User\SponsoredUsers
     */
    public $sponsoredUsers;

    /**
     * @var \monsieurgourmand\Bundle\InterfaceBundle\Route\User\Product
     */
    public $products;

    /**
     * @var User
     */
    private $sponsor;

    /**
     * @var int|null
     */
    private $facebookId;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return User
     */
    public function setId(int $id): User
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return bool
     */
    public function isEnabled()
    {
        return $this->enabled;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @return bool
     */
    public function isNotification()
    {
        return $this->notification;
    }

    /**
     * @return array
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @param bool $enabled
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @param string $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @param string $mobile
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
    }

    /**
     * @param string $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @param bool $notification
     */
    public function setNotification($notification)
    {
        $this->notification = $notification;
    }

    /**
     * @param array $roles
     */
    public function setRoles($roles)
    {
        $this->roles = $roles;
    }

    /**
     * @return bool
     */
    public function isActivation()
    {
        return $this->activation;
    }

    /**
     * @param bool $activation
     */
    public function setActivation($activation)
    {
        $this->activation = $activation;
    }

    /**
     * @return string
     */
    public function getJob()
    {
        return $this->job;
    }

    /**
     * @param string $job
     * @return User
     */
    public function setJob($job)
    {
        $this->job = $job;
        return $this;
    }

    /**
     * @return int
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * @param int $score
     * @return User
     */
    public function setScore($score)
    {
        $this->score = $score;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getApplications()
    {
        return $this->applications;
    }

    /**
     * @param array $applications
     * @return User
     */
    public function setApplications(array $applications): User
    {
        $this->applications = $applications;
        return $this;
    }

    /**
     * @return Customer|null
     */
    public function getCustomerFirm(): ?Customer
    {
        return $this->customerFirm;
    }

    /**
     * @param Customer $customerFirm
     * @return User
     */
    public function setCustomerFirm(Customer $customerFirm): User
    {
        $this->customerFirm = $customerFirm;
        return $this;
    }

    /**
     * @return Supplier|null
     */
    public function getSupplierFirm(): ?Supplier
    {
        return $this->supplierFirm;
    }

    /**
     * @param Supplier $supplierFirm
     * @return User
     */
    public function setSupplierFirm(Supplier $supplierFirm): User
    {
        $this->supplierFirm = $supplierFirm;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getPlaces(): ?array
    {
        return $this->places;
    }

    /**
     * @param array $places
     * @return User
     */
    public function setPlaces(array $places): User
    {
        $this->places = $places;
        return $this;
    }

    /**
     * @return Invitation
     */
    public function getInvitation(): ?Invitation
    {
        return $this->invitation;
    }

    /**
     * @param Invitation $invitation
     *
     * @return User
     */
    public function setInvitation(Invitation $invitation): User
    {
        $this->invitation = $invitation;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPlainPassword(): ?string
    {
        return $this->plainPassword;
    }

    /**
     * @param string|null $plainPassword
     * @return User
     */
    public function setPlainPassword(?string $plainPassword): User
    {
        $this->plainPassword = $plainPassword;

        return $this;
    }

    /**
     * @return BusinessLine|null
     */
    public function getBusinessLine(): ?BusinessLine
    {
        return $this->businessLine;
    }

    /**
     * @param BusinessLine|null $businessLine
     * @return User
     */
    public function setBusinessLine(?BusinessLine $businessLine): User
    {
        $this->businessLine = $businessLine;

        return $this;
    }

    /**
     * @return string
     */
    public function getSponsorshipCode(): ?string
    {
        return $this->sponsorshipCode;
    }

    /**
     * @param string $sponsorshipCode
     *
     * @return User
     */
    public function setSponsorshipCode(?string $sponsorshipCode): User
    {
        $this->sponsorshipCode = $sponsorshipCode;

        return $this;
    }

    /**
     * @return Sponsorship
     */
    public function getSponsorship(): ?Sponsorship
    {
        return $this->sponsorship;
    }

    /**
     * @param Sponsorship $sponsorship
     *
     * @return User
     */
    public function setSponsorship(Sponsorship $sponsorship): User
    {
        $this->sponsorship = $sponsorship;

        return $this;
    }

    /**
     * @param User $sponsor
     *
     * @return User
     */
    public function setSponsor(User $sponsor): User
    {
        $this->sponsor = $sponsor;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getFacebookId(): ?int
    {
        return $this->facebookId;
    }

    /**
     * @param int|null $facebookId
     * @return User
     */
    public function setFacebookId(?int $facebookId): User
    {
        $this->facebookId = $facebookId;
        return $this;
    }
}
