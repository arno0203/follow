<?php
/**
 * Created by PhpStorm.
 * User: ado
 * Date: 13/02/17
 * Time: 15:43
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Description of Sex
 *
 * @ORM\Entity
 * @ORM\Table(name="sex")
 */
class Sex extends Listing
{


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
     * Set lib
     *
     * @param string $lib
     *
     * @return Sex
     */
    public function setLib($lib)
    {
        $this->lib = $lib;

        return $this;
    }

    /**
     * Get lib
     *
     * @return string
     */
    public function getLib()
    {
        return $this->lib;
    }

    /**
     * Set cod
     *
     * @param string $cod
     *
     * @return Sex
     */
    public function setCod($cod)
    {
        $this->cod = $cod;

        return $this;
    }

    /**
     * Get cod
     *
     * @return string
     */
    public function getCod()
    {
        return $this->cod;
    }

    /**
     * Set ordre
     *
     * @param integer $ordre
     *
     * @return Sex
     */
    public function setOrdre($ordre)
    {
        $this->ordre = $ordre;

        return $this;
    }

    /**
     * Get ordre
     *
     * @return integer
     */
    public function getOrdre()
    {
        return $this->ordre;
    }

    /**
     * Set actif
     *
     * @param integer $actif
     *
     * @return Sex
     */
    public function setActif($actif)
    {
        $this->actif = $actif;

        return $this;
    }

    /**
     * Get actif
     *
     * @return integer
     */
    public function getActif()
    {
        return $this->actif;
    }

    /**
     * Set selected
     *
     * @param integer $selected
     *
     * @return Sex
     */
    public function setSelected($selected)
    {
        $this->selected = $selected;

        return $this;
    }

    /**
     * Get selected
     *
     * @return integer
     */
    public function getSelected()
    {
        return $this->selected;
    }
}
