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
     * @ORM\Column(name="avatar", type="string", length=250)
     */
    protected $avatar;

    /**
     * @var \Sex
     *
     * @ORM\ManyToOne(targetEntity="Sexe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sexId", referencedColumnName="id")
     * })
     */
    protected $sex;

}