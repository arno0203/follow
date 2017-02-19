<?php
/**
 * Created by PhpStorm.
 * User: ado
 * Date: 13/02/17
 * Time: 16:22
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="result")
 */
class Result
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var boolean  $podium
     * @ORM\Column(name="podium", type="integer")
     */
    protected $podium;

    /**
     * @var string $comments
     * @ORM\Column(name="comment", type="string")
     */
    protected $comment;

    /**
     * @ORM\OneToMany(targetEntity="Registration", mappedBy="result")
     */
    protected $registrations;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->registrations = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set podium
     *
     * @param integer $podium
     *
     * @return Result
     */
    public function setPodium($podium)
    {
        $this->podium = $podium;

        return $this;
    }

    /**
     * Get podium
     *
     * @return integer
     */
    public function getPodium()
    {
        return $this->podium;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return Result
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Add registration
     *
     * @param \AppBundle\Entity\Registration $registration
     *
     * @return Result
     */
    public function addRegistration(\AppBundle\Entity\Registration $registration)
    {
        $this->registrations[] = $registration;

        return $this;
    }

    /**
     * Remove registration
     *
     * @param \AppBundle\Entity\Registration $registration
     */
    public function removeRegistration(\AppBundle\Entity\Registration $registration)
    {
        $this->registrations->removeElement($registration);
    }

    /**
     * Get registrations
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRegistrations()
    {
        return $this->registrations;
    }
}
