<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StarRate
 *
 * @ORM\Table(name="star_rate")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\StarRateRepository")
 */
class StarRate
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
     * @var int
     *
     * @ORM\Column(name="value", type="integer")
     */
    private $value;

    /**
     * @var ArrayCollection
     *
     * @ORM\ManyToOne(targetEntity="Individual", inversedBy = "starRate")
     */
    private $individual;


    /**
     * @var ArrayCollection
     *
     * @ORM\ManyToOne(targetEntity="Serie", inversedBy = "starRate")
     */
    private $serie;

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
     * Set value
     *
     * @param integer $value
     * @return StarRate
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return integer 
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set individual
     *
     * @param \AppBundle\Entity\Individual $individual
     * @return StarRate
     */
    public function setIndividual(\AppBundle\Entity\Individual $individual = null)
    {
        $this->individual = $individual;

        return $this;
    }

    /**
     * Get individual
     *
     * @return \AppBundle\Entity\Individual 
     */
    public function getIndividual()
    {
        return $this->individual;
    }

    /**
     * Set serie
     *
     * @param \AppBundle\Entity\Serie $serie
     * @return StarRate
     */
    public function setSerie(\AppBundle\Entity\Serie $serie = null)
    {
        $this->serie = $serie;

        return $this;
    }

    /**
     * Get serie
     *
     * @return \AppBundle\Entity\Serie
     */
    public function getSerie()
    {
        return $this->serie;
    }
}
