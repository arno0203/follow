<?php
namespace AppBundle\Form\DataTransformer;


use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;

class DateTransformer implements DataTransformerInterface
{
    public function transform($value)
    {
        /* @var \DateTime $value */
        return $value->format('d/m/Y');
    }

    public function reverseTransform($value)
    {

    }

}