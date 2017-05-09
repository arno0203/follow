<?php
namespace AppBundle\Controller;

use AppBundle\Entity\Member;
use AppBundle\Form\MemberType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class MembersController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function listAction(){
        $repository = $this->getDoctrine()->getRepository('AppBundle:Member');
        $members = $repository->findAll();

        return $this->render('members/list.html.twig', array('members' => $members));
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function addAction(Request $request){
        $member = new Member();
        $formMember = $this->get('form.factory')->create(MemberType::class, $member);

        if ($request->isMethod('POST') && $formMember->handleRequest($request)->isValid()) {
            $file = $member->getAvatar();
            if(!empty($file)) {
                $fileName = md5(uniqid()).'.'.$file->guessExtension();
                $file->move(
                    $this->getParameter('avatar_directory'),
                    $fileName
                );
                $member->setAvatar($fileName);
            }
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

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function updateAction(Request $request){

//        if ($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {
            $repository = $this->getDoctrine()->getRepository('AppBundle:Member');
            $member = $repository->find($request->get('id', 0));
            $formMember = $this->get('form.factory')->create(MemberType::class, $member);

            if ($request->isMethod('POST') && $formMember->handleRequest($request)->isValid()) {
                $file = $member->getAvatar();
                if(!empty($file)) {
                    $fileName = md5(uniqid()).'.'.$file->guessExtension();
                    $file->move(
                        $this->getParameter('avatar_directory'),
                        $fileName
                    );
                    $member->setAvatar($fileName);
                }
                $em = $this->getDoctrine()->getManager();
                $em->persist($member);
                $em->flush();

                $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

                return $this->redirectToRoute('app_judoka_list');
            }

            return $this->render('members/add.html.twig', array(
                'form' => $formMember->createView(),
            ));

//        }
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function detailAction(Request $request){
        $repository = $this->getDoctrine()->getRepository('AppBundle:Member');
        $memberId = intval($request->get('id', 0));
        $member = $repository->find($memberId);

        dump($this->get('app.manager.member')->getWeights());die;
        return $this->render('members/detail.html.twig', array(
            'measures' => $member->getMeasures(),
        ));

    }

}