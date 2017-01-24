<?php

namespace BackBundle\Entity;

use BackBundle\Entity\Commercial;
use BackBundle\Entity\Company;
use BackBundle\Entity\Customer;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation As Gedmo;

/**
 * Command
 *
 * @ORM\Table(name="command")
 * @ORM\Entity(repositoryClass="BackBundle\Repository\CommandRepository")
 */
class Command
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
//    /**
//     * @var string
//     * @Gedmo\Slug(fields={"company"}, updatable=false)
//     * @ORM\Column(length=128, unique=true)
//     */
//    private $slug;

    /**
     * @var Customer
     *
     * @ORM\ManyToOne(targetEntity="BackBundle\Entity\Customer")
     * @ORM\JoinColumn(nullable=true)
     */
    private $customer;

    /**
     * @var Company
     *
     * @ORM\ManyToOne(targetEntity="BackBundle\Entity\Company")
     * @ORM\JoinColumn(nullable=true)
     */
    private $company;

    /**
     * @var Commercial
     * @ORM\ManyToOne(targetEntity="BackBundle\Entity\Commercial")
     * @ORM\JoinColumn(nullable=true)
     */
    private $commercial;

    /**
     * @var \DateTime
     *
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $created;

    /**
     * @var \DateTime
     *
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column( type="datetime", nullable=true)
     */
    private $updated;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Command
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     *
     * @return Command
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set customer
     *
     * @param Customer $customer
     *
     * @return Command
     */
    public function setCustomer(Customer $customer = null)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * Get customer
     *
     * @return Customer
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Set company
     *
     * @param Company $company
     *
     * @return Command
     */
    public function setCompany(Company $company = null)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company
     *
     * @return Company
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set commercial
     *
     * @param Commercial $commercial
     *
     * @return Command
     */
    public function setCommercial(Commercial $commercial = null)
    {
        $this->commercial = $commercial;

        return $this;
    }

    /**
     * Get commercial
     *
     * @return Commercial
     */
    public function getCommercial()
    {
        return $this->commercial;
    }


}
