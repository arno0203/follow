<?php
namespace AppBundle\Controller;

use AppBundle\Entity\Event;
use AppBundle\Form\EventType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class EventsController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function listAction(){
//        $repository = $this->getDoctrine()->getRepository('AppBundle:Event');
//        $events = $repository->findAll();
        $events = null;

        return $this->render('events/list.html.twig', array('events' => $events));
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function addAction(Request $request){
        $event = new Event();
        $formEvent = $this->get('form.factory')->create(EventType::class, $event);

        if ($request->isMethod('POST') && $formEvent->handleRequest($request)->isValid()) {
//            $file = $member->getAvatar();
//            if(!empty($file)) {
//                $fileName = md5(uniqid()).'.'.$file->guessExtension();
//                $file->move(
//                    $this->getParameter('avatar_directory'),
//                    $fileName
//                );
//                $member->setAvatar($fileName);
//            }
            $em = $this->getDoctrine()->getManager();
            $em->persist($event);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Evénement bien enregistrée.');

            return $this->redirectToRoute('app_event_list');
        }

        return $this->render('events/add.html.twig', array(
            'form' => $formEvent->createView(),
        ));
    }

}