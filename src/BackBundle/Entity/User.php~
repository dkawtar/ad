<?php

namespace BackBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use Gedmo\Mapping\Annotation As Gedmo;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="BackBundle\Repository\UserRepository")
 */
class User extends BaseUser
{
    const ROLE_ADMIN = 'ROLE_ADMIN';
    const ROLE_CUSTOMER = 'ROLE_CUSTOMER';
    const ROLE_COMPANY = 'ROLE_COMPANY';
    const ROLE_COMMERCIAL = 'ROLE_COMMERCIAL';

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var bool
     *
     * @ORM\Column(name="change_password", type="boolean",nullable=true)
     */
    protected $changePassword;



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
     * User constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->changePassword = true;
    }

   
}
