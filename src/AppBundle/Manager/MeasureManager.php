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

class MeasureManager extends BaseManager
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
     * @param $measures
     * @return array
     */
    public function getMinMax($measures)
    {
        if (!empty($measures)) {
            $min = $max = null;
            foreach ($measures as $measure) {
                if (is_null($min) || $min > $measure[1]) {
                    $min = $measure[1];
                }

                if (is_null($max) || $max < $measure[1]) {
                    $max = $measure[1];
                }
            }

            return ['min' => $min, 'max' => $max];
        }
    }
}