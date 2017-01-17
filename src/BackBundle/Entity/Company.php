<?php

namespace BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Company
 *
 * @ORM\Table(name="company")
 * @ORM\Entity(repositoryClass="BackBundle\Repository\CompanyRepository")
 */
class Company
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;


    /**
     * @var string
     *
     * @ORM\Column(name="lastNameRepresentative", type="string", length=255)
     */
    private $lastNameRepresentative;

    /**
     * @var string
     *
     * @ORM\Column(name="firstNameRepresentative", type="string", length=255)
     */
    private $firstNameRepresentative;


    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=255, nullable=true)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="SIRET", type="string", length=255)
     */
    private $sIRET;

    /**
     * @var string
     *
     * @ORM\Column(name="numeroTVA", type="string", length=255)
     */
    private $numeroTVA;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="additionalAddress", type="string", length=255, nullable=true)
     */
    private $additionalAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=255)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="postalCode", type="string", length=255)
     */
    private $postalCode;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="mobile", type="string", length=255, nullable=true)
     */
    private $mobile;

    /**
     * @var string
     *
     * @ORM\Column(name="fix", type="string", length=255,nullable=true)
     */
    private $fix;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Company
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set firstNameRepresentative
     *
     * @param string $firstNameRepresentative
     *
     * @return Company
     */
    public function setFirstNameRepresentative($firstNameRepresentative)
    {
        $this->firstNameRepresentative = $firstNameRepresentative;

        return $this;
    }

    /**
     * Get firstNameRepresentative
     *
     * @return string
     */
    public function getFirstNameRepresentative()
    {
        return $this->firstNameRepresentative;
    }

    /**
     * Set lastNameRepresentative
     *
     * @param string $lastNameRepresentative
     *
     * @return Company
     */
    public function setLastNameRepresentative($lastNameRepresentative)
    {
        $this->lastNameRepresentative = $lastNameRepresentative;

        return $this;
    }

    /**
     * Get lastNameRepresentative
     *
     * @return string
     */
    public function getLastNameRepresentative()
    {
        return $this->lastNameRepresentative;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Company
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return Company
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set sIRET
     *
     * @param string $sIRET
     *
     * @return Company
     */
    public function setSIRET($sIRET)
    {
        $this->sIRET = $sIRET;

        return $this;
    }

    /**
     * Get sIRET
     *
     * @return string
     */
    public function getSIRET()
    {
        return $this->sIRET;
    }

    /**
     * Set numeroTVA
     *
     * @param string $numeroTVA
     *
     * @return Company
     */
    public function setNumeroTVA($numeroTVA)
    {
        $this->numeroTVA = $numeroTVA;

        return $this;
    }

    /**
     * Get numeroTVA
     *
     * @return string
     */
    public function getNumeroTVA()
    {
        return $this->numeroTVA;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return Company
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set additionalAddress
     *
     * @param string $additionalAddress
     *
     * @return Company
     */
    public function setAdditionalAddress($additionalAddress)
    {
        $this->additionalAddress = $additionalAddress;

        return $this;
    }

    /**
     * Get additionalAddress
     *
     * @return string
     */
    public function getAdditionalAddress()
    {
        return $this->additionalAddress;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return Company
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set postalCode
     *
     * @param string $postalCode
     *
     * @return Company
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * Get postalCode
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return Company
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set mobile
     *
     * @param string $mobile
     *
     * @return Company
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Get mobile
     *
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Set fix
     *
     * @param string $fix
     *
     * @return Company
     */
    public function setFix($fix)
    {
        $this->fix = $fix;

        return $this;
    }

    /**
     * Get fix
     *
     * @return string
     */
    public function getFix()
    {
        return $this->fix;
    }
}

