<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MembersController extends Controller
{
    public function listAction(){
        return $this->render('members/list.html.twig');
    }
}