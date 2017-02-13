<?php
/**
 * Created by PhpStorm.
 * User: ado
 * Date: 13/02/17
 * Time: 16:13
 */

namespace AppBundle\Entity;


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
     * @ORM\Column(name="value", type="integer")
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
     *   @ORM\JoinColumn(name="measureTypeId", referencedColumnName="id")
     * })
     */
    protected $measureType;
}