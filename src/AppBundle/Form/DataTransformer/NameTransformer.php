<?php
namespace AppBundle\Form\DataTransformer;


use Symfony\Component\Form\DataTransformerInterface;

class NameTransformer implements DataTransformerInterface
{
    public function transform($name)
    {
        return ucwords($name);
    }

    public function reverseTransform($name)
    {
        return ucwords($name);
    }

}