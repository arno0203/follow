<?php
namespace AppBundle\Controller;

use AppBundle\Entity\Member;
use AppBundle\Form\MemberType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MembersController extends Controller
{
    public function listAction(){
        return $this->render('members/list.html.twig');
    }

    public function addAction(){
        $member = new Member();
        $formMember = $this->get('form.factory')->create(MemberType::class, $member);

        return $this->render('members/add.html.twig', array(
            'form' => $formMember->createView(),
        ));
    }
}