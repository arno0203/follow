<?php
/**
 * Created by PhpStorm.
 * User: ado
 * Date: 07/05/17
 * Time: 18:57
 */

namespace AppBundle\Manager;


use AppBundle\Entity\Measure;
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
        return $this->buildArray($this->getMesaureByType($memberId, 'kg'), 'kg');
    }

    /**
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getSizes($memberId){
        return $this->getMesaureByType($memberId, 'm');
    }

    /**
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getMesaureByType($memberId, $type){
        $ret = new \Doctrine\Common\Collections\ArrayCollection();

        foreach ($this->em->getRepository('AppBundle:Member')->find($memberId)->getMeasures() as $measure){
            /** @var $measure Measure */
            if($measure->getMeasureType()->getCod() == $type){
                $ret->add($measure);
            }
        }
        return $ret;
    }

    /**
     * @param $datas
     * @param $type
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function buildArray($datas, $type){
        $ret = new \Doctrine\Common\Collections\ArrayCollection();
        foreach ($datas as $measure){
            /** @var $measure Measure */
            if($measure->getMeasureType()->getCod() == $type){
                $ret->add([$measure->getDate()->getTimestamp()*1000, $measure->getValue()]);
            }
        }
        return $ret;
    }
}