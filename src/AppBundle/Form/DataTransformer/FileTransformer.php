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
//    private $avatarDirectory;
//
//    public function __construct( $avatarDirectory)
//    {
//        print_r($avatarDirectory);exit;
//        $this->avatarDirectory = $avatarDirectory;
//    }

    public function transform($file)
    {
        if(!empty($file)){
            return new File('../web/uploads/avatars/'.$file);
        }
        return null;
    }

    public function reverseTransform($file)
    {
       return $file;
    }

}