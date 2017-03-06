<?php
/**
 * Created by PhpStorm.
 * User: ado
 * Date: 05/03/17
 * Time: 13:39
 */

namespace AppBundle\Form\DataTransformer;


use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;
use Symfony\Component\HttpFoundation\File\File;

class FileTransformer implements DataTransformerInterface
{
    /**
     * @param mixed $file
     * @return null|File
     */
    public function transform($file)
    {
        if(!empty($file)){
            return new File('../web/uploads/avatars/'.$file);
        }
        return null;
    }

    /**
     * @param mixed $file
     * @return mixed
     */
    public function reverseTransform($file)
    {
       return $file;
    }

}