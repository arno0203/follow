<?php
/**
 * Created by PhpStorm.
 * User: ado
 * Date: 13/02/17
 * Time: 15:51
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="event")
 */
class Event
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string $name
     * @ORM\Column(name="name", type="string", length=50)
     */
    protected $name;

    /**
     * @var string $city
     * @ORM\Column(name="city", type="string", length=50)
     */
    protected $city;

    /**
     * @var string $date
     * @ORM\Column(name="date", type="datetime")
     */
    protected $date;

    /**
     * @var \eventType
     *
     * @ORM\ManyToOne(targetEntity="EventType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="eventTypeId", referencedColumnName="id")
     * })
     */
    protected $eventType;

    /**
     * @ORM\OneToMany(targetEntity="Registration", mappedBy="event")
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
     * Set name
     *
     * @param string $name
     *
     * @return Event
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
     * Set city
     *
     * @param string $city
     *
     * @return Event
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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Event
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set eventType
     *
     * @param \AppBundle\Entity\EventType $eventType
     *
     * @return Event
     */
    public function setEventType(\AppBundle\Entity\EventType $eventType = null)
    {
        $this->eventType = $eventType;

        return $this;
    }

    /**
     * Get eventType
     *
     * @return \AppBundle\Entity\EventType
     */
    public function getEventType()
    {
        return $this->eventType;
    }

    /**
     * Add registration
     *
     * @param \AppBundle\Entity\Registration $registration
     *
     * @return Event
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
