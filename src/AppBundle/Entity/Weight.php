<?php
/**
 * Created by PhpStorm.
 * User: ado
 * Date: 19/02/17
 * Time: 15:59
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="weight")
 */
class Weight
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
     * @var string $min
     * @ORM\Column(name="min", type="integer")
     */
    protected $min;

    /**
     * @var string $max
     * @ORM\Column(name="max", type="integer")
     */
    protected $max;
}