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
}