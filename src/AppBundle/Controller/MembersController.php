<?php
namespace AppBundle\Controller;

use AppBundle\Entity\Member;
use AppBundle\Form\MemberType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class MembersController extends Controller
{
    public function listAction(){
        $repository = $this->getDoctrine()->getRepository('AppBundle:Member');
        $members = $repository->findAll();

        return $this->render('members/list.html.twig', array('members' => $members));
    }

    public function addAction(Request$request){
        $member = new Member();
        $formMember = $this->get('form.factory')->create(MemberType::class, $member);

        if ($request->isMethod('POST') && $formMember->handleRequest($request)->isValid()) {
            $file = $member->getAvatar();
            $fileName = md5(uniqid()).'.'.$file->guessExtension();
            $file->move(
                $this->getParameter('avatar_directory'),
                $fileName
            );
            $member->setAvatar($fileName);

            $em = $this->getDoctrine()->getManager();
            $em->persist($member);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

            return $this->redirectToRoute('app_judoka_list');
        }

        return $this->render('members/add.html.twig', array(
            'form' => $formMember->createView(),
        ));
    }
}