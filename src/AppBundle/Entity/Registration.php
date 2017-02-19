<?php
/**
 * Created by PhpStorm.
 * User: ado
 * Date: 19/02/17
 * Time: 15:34
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="registration")
 */
class Registration
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Member")
     * @ORM\JoinColumn(nullable=false)
     */
    protected $member;

    /**
     * @ORM\ManyToOne(targetEntity="Event")
     * @ORM\JoinColumn(nullable=false)
     */
    protected $event;

    /**
     * @ORM\ManyToOne(targetEntity="Result")
     * @ORM\JoinColumn(nullable=false)
     */
    protected $result;


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
     * Set member
     *
     * @param \AppBundle\Entity\Member $member
     *
     * @return Registration
     */
    public function setMember(\AppBundle\Entity\Member $member)
    {
        $this->member = $member;

        return $this;
    }

    /**
     * Get member
     *
     * @return \AppBundle\Entity\Member
     */
    public function getMember()
    {
        return $this->member;
    }

    /**
     * Set event
     *
     * @param \AppBundle\Entity\Event $event
     *
     * @return Registration
     */
    public function setEvent(\AppBundle\Entity\Event $event)
    {
        $this->event = $event;

        return $this;
    }

    /**
     * Get event
     *
     * @return \AppBundle\Entity\Event
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Set result
     *
     * @param \AppBundle\Entity\Result $result
     *
     * @return Registration
     */
    public function setResult(\AppBundle\Entity\Result $result)
    {
        $this->result = $result;

        return $this;
    }

    /**
     * Get result
     *
     * @return \AppBundle\Entity\Result
     */
    public function getResult()
    {
        return $this->result;
    }
}
