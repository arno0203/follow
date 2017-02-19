<?php
/**
 * Created by PhpStorm.
 * User: ado
 * Date: 13/02/17
 * Time: 15:42
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Listing
 *
 * @ORM\Table(name="listing")
 *
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="type", type="string")
 * @ORM\DiscriminatorMap({"sex" = "Sex", "eventType" = "EventType", "fightingType" = "FightingType", "measureType" = "MeasureType"})
 */
class Listing
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="lib", type="string", length=255, nullable=false)
     */
    protected $lib;

    /**
     * @var string
     *
     * @ORM\Column(name="cod", type="string", length=255, nullable=false)
     */
    protected $cod;

    /**
     * @var integer
     *
     * @ORM\Column(name="ordre", type="integer", nullable=false)
     */
    protected $ordre;

    /**
     * @var integer
     *
     * @ORM\Column(name="actif", type="integer", nullable=false)
     */
    protected $actif;

    /**
     * @var integer
     *
     * @ORM\Column(name="selected", type="integer", nullable=false)
     */
    protected $selected;
}