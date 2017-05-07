<?php
/**
 * Created by PhpStorm.
 * User: ado
 * Date: 13/02/17
 * Time: 15:10
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="member")
 */
class Member
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string $firstName
     * @ORM\Column(name="firstName", type="string", length=50)
     */
    protected $firstName;

    /**
     * @var string $lastName
     * @ORM\Column(name="lastName", type="string", length=50)
     */
    protected $lastName;

    /**
     * @var string $birthday
     * @ORM\Column(name="birthday", type="datetime")
     */
    protected $birthday;

    /**
     * @var string $avatar
     * @ORM\Column(name="avatar", type="string", length=250, nullable=true)
     */
    protected $avatar;

    /**
     * @var \Sex
     *
     * @ORM\ManyToOne(targetEntity="Sex")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sex_id", referencedColumnName="id")
     * })
     */
    protected $sex;

    /**
     * @var ArrayCollection $measures
     * @ORM\OneToMany(targetEntity="Measure", mappedBy="member", fetch="EAGER")
     */
      protected $measures;

    /**
     * @var ArrayCollection $registrations
     * @ORM\OneToMany(targetEntity="Registration", mappedBy="member")
     */
    protected $registrations;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->measures = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set firstName
     *
     * @param string $firstName
     *
     * @return Member
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return Member
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set birthday
     *
     * @param \DateTime $birthday
     *
     * @return Member
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * Get birthday
     *
     * @return \DateTime
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set avatar
     *
     * @param string $avatar
     *
     * @return Member
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;

        return $this;
    }

    /**
     * Get avatar
     *
     * @return string
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * Set sex
     *
     * @param \AppBundle\Entity\Sex $sex
     *
     * @return Member
     */
    public function setSex(\AppBundle\Entity\Sex $sex = null)
    {
        $this->sex = $sex;

        return $this;
    }

    /**
     * Get sex
     *
     * @return \AppBundle\Entity\Sex
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Add measure
     *
     * @param \AppBundle\Entity\Measure $measure
     *
     * @return Member
     */
    public function addMeasure(\AppBundle\Entity\Measure $measure)
    {
        $this->measures[] = $measure;

        return $this;
    }

    /**
     * Remove measure
     *
     * @param \AppBundle\Entity\Measure $measure
     */
    public function removeMeasure(\AppBundle\Entity\Measure $measure)
    {
        $this->measures->removeElement($measure);
    }

    /**
     * Get measures
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMeasures()
    {
        return $this->measures;
    }

    /**
     * Add registration
     *
     * @param \AppBundle\Entity\Registration $registration
     *
     * @return Member
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
