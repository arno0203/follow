<?php
/**
 * Created by PhpStorm.
 * User: ado
 * Date: 13/02/17
 * Time: 16:22
 */

namespace AppBundle\Entity;

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
     * @ORM\Column(name="avatar", type="boolean", default="false")
     */
    protected $podium;

    /**
     * @var string $comments
     * @ORM\Column(name="comment", type="string")
     */
    protected $comment;
}