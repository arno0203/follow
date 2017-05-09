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
    public function getWeights(){
        $ret = new \Doctrine\Common\Collections\ArrayCollection();

        foreach ($this->em->measures as $measure){
            /** @var $measure Measure */
            if($measure->getMeasureType()->getCod() == 'kg'){
                $ret->add($measure);
            }
        }
        return $ret;
    }
}