<?php
/**
 * Created by PhpStorm.
 * User: ado
 * Date: 07/05/17
 * Time: 18:57
 */

namespace AppBundle\Manager;


use Doctrine\ORM\EntityManager;

class MemberManager extends BaseManager
{
    protected $em;
    protected $container;

    /**
     * MemberManager constructor.
     * @param EntityManager $entityManager
     */
    public function __construct(EntityManager $entityManager)
    {
        $this->em = $entityManager;
    }

    /**
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getWeights($memberId){
        return $this->getWeightsMesaureByType($memberId, 'kg');
    }

    /**
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getSizes($memberId){
        return $this->getWeightsMesaureByType($memberId, 'm');
    }

    /**
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getWeightsMesaureByType($memberId, $type){
        $ret = new \Doctrine\Common\Collections\ArrayCollection();

        foreach ($this->em->getRepository('AppBundle:Member')->find($memberId)->getMeasures() as $measure){
            /** @var $measure Measure */
            if($measure->getMeasureType()->getCod() == $type){
                $ret->add($measure);
            }
        }
        return $ret;
    }
}