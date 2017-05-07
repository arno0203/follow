<?php
/**
 * Created by PhpStorm.
 * User: ado
 * Date: 13/02/17
 * Time: 16:13
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="measure")
 */
class Measure
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string $value
     * @ORM\Column(name="value", type="float")
     */
    protected $value;

    /**
     * @var string $date
     * @ORM\Column(name="date", type="datetime")
     */
    protected $date;

    /**
     * @var \measureType
     *
     * @ORM\ManyToOne(targetEntity="MeasureType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="measureType_id", referencedColumnName="id")
     * })
     */
    protected $measureType;

    /**
     * @var \member
     *
     * @ORM\ManyToOne(targetEntity="Member", inversedBy="measures")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="member_id", referencedColumnName="id")
     * })
     */
    protected $member;


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
     * @param float $value
     *
     * @return Measure
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return float
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Measure
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
     * Set measureType
     *
     * @param \AppBundle\Entity\MeasureType $measureType
     *
     * @return Measure
     */
    public function setMeasureType(\AppBundle\Entity\MeasureType $measureType = null)
    {
        $this->measureType = $measureType;

        return $this;
    }

    /**
     * Get measureType
     *
     * @return \AppBundle\Entity\MeasureType
     */
    public function getMeasureType()
    {
        return $this->measureType;
    }

    /**
     * Set member
     *
     * @param \AppBundle\Entity\Member $member
     *
     * @return Measure
     */
    public function setMember(\AppBundle\Entity\Member $member = null)
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
}
