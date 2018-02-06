<?php

namespace WeiseUndStark\MarksaleConnector\Entity;

/**
 * Class Contact
 * @package WeiseUndStark\MarksaleConnector\Entity
 * @since 1.0
 */
final class Contact
{
    /**
     * @var null|string
     */
    protected $companyName;

    /**
     * @var null|string
     */
    protected $firstName;

    /**
     * @var null|string
     */
    protected $lastName;

    /**
     * @var null|string
     */
    protected $customerNumber;

    /**
     * @var null|\DateTime
     */
    protected $birthday;

    /**
     * @var null|string
     */
    protected $email;

    /**
     * @var null|string
     */
    protected $salutation;

    /**
     * @var null|string
     */
    protected $street;

    /**
     * @var null|string
     */
    protected $houseNumber;

    /**
     * @var null|string
     */
    protected $zipCode;

    /**
     * @var null|string
     */
    protected $city;

    /**
     * @var null|string
     */
    protected $phoneNumber;

    /**
     * Contact constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }

    /**
     * @param null|string $companyName
     * @return Contact
     */
    public function setCompanyName(?string $companyName): Contact
    {
        $this->companyName = $companyName;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * @param null|string $firstName
     * @return Contact
     */
    public function setFirstName(?string $firstName): Contact
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * @param null|string $lastName
     * @return Contact
     */
    public function setLastName(?string $lastName): Contact
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getCustomerNumber(): ?string
    {
        return $this->customerNumber;
    }

    /**
     * @param null|string $customerNumber
     * @return Contact
     */
    public function setCustomerNumber(?string $customerNumber): Contact
    {
        $this->customerNumber = $customerNumber;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getBirthday(): ?\DateTime
    {
        return $this->birthday;
    }

    /**
     * @param \DateTime|null $birthday
     * @return Contact
     */
    public function setBirthday(?\DateTime $birthday): Contact
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param null|string $email
     * @return Contact
     */
    public function setEmail(?string $email): Contact
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getSalutation(): ?string
    {
        return $this->salutation;
    }

    /**
     * @param null|string $salutation
     * @return Contact
     */
    public function setSalutation(?string $salutation): Contact
    {
        $this->salutation = $salutation;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getStreet(): ?string
    {
        return $this->street;
    }

    /**
     * @param null|string $street
     * @return Contact
     */
    public function setStreet(?string $street): Contact
    {
        $this->street = $street;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getHouseNumber(): ?string
    {
        return $this->houseNumber;
    }

    /**
     * @param null|string $houseNumber
     * @return Contact
     */
    public function setHouseNumber(?string $houseNumber): Contact
    {
        $this->houseNumber = $houseNumber;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }

    /**
     * @param null|string $zipCode
     * @return Contact
     */
    public function setZipCode(?string $zipCode): Contact
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * @param null|string $city
     * @return Contact
     */
    public function setCity(?string $city): Contact
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    /**
     * @param null|string $phoneNumber
     * @return Contact
     */
    public function setPhoneNumber(?string $phoneNumber): Contact
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }
}