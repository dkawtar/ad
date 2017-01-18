<?php

namespace BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation As Gedmo;

/**
 * DesignApplication
 *
 * @ORM\Table(name="design_application")
 * @ORM\Entity(repositoryClass="BackBundle\Repository\DesignApplicationRepository")
 */
class DesignApplication
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
     * @ORM\Column(name="backgroundColor", type="string", length=255, nullable=true)
     */
    private $backgroundColor;

    /**
     * @var string
     *
     * @ORM\Column(name="buttonColor", type="string", length=255, nullable=true)
     */
    private $buttonColor;

    /**
     * @var string
     *
     * @ORM\Column(name="fontColor", type="string", length=255, nullable=true)
     */
    private $fontColor;
    
    
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
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set backgroundColor
     *
     * @param string $backgroundColor
     *
     * @return DesignApplication
     */
    public function setBackgroundColor($backgroundColor)
    {
        $this->backgroundColor = $backgroundColor;

        return $this;
    }

    /**
     * Get backgroundColor
     *
     * @return string
     */
    public function getBackgroundColor()
    {
        return $this->backgroundColor;
    }

    /**
     * Set buttonColor
     *
     * @param string $buttonColor
     *
     * @return DesignApplication
     */
    public function setButtonColor($buttonColor)
    {
        $this->buttonColor = $buttonColor;

        return $this;
    }

    /**
     * Get buttonColor
     *
     * @return string
     */
    public function getButtonColor()
    {
        return $this->buttonColor;
    }

    /**
     * Set fontColor
     *
     * @param string $fontColor
     *
     * @return DesignApplication
     */
    public function setFontColor($fontColor)
    {
        $this->fontColor = $fontColor;

        return $this;
    }

    /**
     * Get fontColor
     *
     * @return string
     */
    public function getFontColor()
    {
        return $this->fontColor;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return DesignApplication
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
     * @return DesignApplication
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
}
