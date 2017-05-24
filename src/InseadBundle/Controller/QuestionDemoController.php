<?php

namespace InseadBundle\Controller;

use InseadBundle\Entity\Answer;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class QuestionDemoController extends Controller
{


    public function questionDemo1Action(Request $request)
    {
        /*$session = $request->getSession();
        $session->set('answer1', 'test');

        $em = $this->getDoctrine()->getManager();
        $question = $em->getRepository('InseadBundle:Questions')->getChoicesById(1);

        return $this->render('InseadBundle:user:questionDemo1.html.twig', array(
            'question' => $question
        ));*/
        return $this->render('InseadBundle:user:questionDemo1.html.twig');
    }

    public function questionDemo2Action(Request $request)
    {
        /*$session = $request->getSession();
        $session->set('answer2', 'test');
        
        $em = $this->getDoctrine()->getManager();
        $question = $em->getRepository('InseadBundle:Questions')->getChoicesById(2);

        return $this->render('InseadBundle:user:questionDemo2.html.twig', array(
            'question' => $question
        ));*/
        return $this->render('InseadBundle:user:questionDemo2.html.twig');
    }

    public function questionDemo3Action(Request $request)
    {
        /*$session = $request->getSession();
        $session->set('answer3', 'test');
        
        $em = $this->getDoctrine()->getManager();
        $question = $em->getRepository('InseadBundle:Questions')->getChoicesById(3);

        return $this->render('InseadBundle:user:questionDemo3.html.twig', array(
            'question' => $question
        ));*/
        return $this->render('InseadBundle:user:questionDemo3.html.twig');
    }

    public function questionDemo4Action(Request $request)
    {
        /*$session = $request->getSession();
        $session->set('answer4', 'test');
        
        $em = $this->getDoctrine()->getManager();
        $question = $em->getRepository('InseadBundle:Questions')->getChoicesById(4);

        return $this->render('InseadBundle:user:questionDemo4.html.twig', array(
            'question' => $question
        ));*/
        return $this->render('InseadBundle:user:questionDemo4.html.twig');
    }

    public function questionDemo5Action(Request $request)
    {

        return $this->render('InseadBundle:user:questionDemo5.html.twig');
    }
    /*public function validerAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $session = $request->getSession();

        $answer = new Answer();
        $answer->set($session->get('answer1'));
        $answer = new Answer();
        $answer->set($session->get('answer2'));
        $answer = new Answer();
        $answer->set($session->get('answer3'));
        $answer = new Answer();
        $answer->set($session->get('answer4'));
        $answer = new Answer();
        $answer->set($session->get('answer5'));


        $em->persist($answer);
        $em->flush();

        $session->remove('answer1');
        $session->remove('answer2');
        $session->remove('answer3');
        $session->remove('answer4');
        $session->remove('answer5');

        return $this->redirectToRoute('fos_user_registration_register');
    }*/

}
