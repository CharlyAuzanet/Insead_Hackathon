<?php

namespace InseadBundle\Controller;

use InseadBundle\Entity\Answer;
use InseadBundle\Form\AnswerType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class QuestionDemoController extends Controller
{


    public function questionDemo1Action(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $question = $em->getRepository('InseadBundle:Questions')->findOneById(1);

        $answer = new Answer();
        $form = $this ->createForm(AnswerType::class, $answer, array(
            'idQuestion' => 1,
            'question' => $question
        ));

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($answer);
            $em->flush();

            return $this->redirectToRoute('insead_questionDemo2');
        }

        return $this->render('InseadBundle:user:questionDemo1.html.twig', array(
            'question' => $question,
            'form' => $form->createView()
        ));
    }
    public function questionDemo2Action(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $question = $em->getRepository('InseadBundle:Questions')->findOneById(2);

        $answer = new Answer();
        $form = $this ->createForm(AnswerType::class, $answer, array(
            'idQuestion' => 2,
            'question' => $question
        ));

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($answer);
            $em->flush();

            return $this->redirectToRoute('insead_questionDemo3');
        }

        return $this->render('InseadBundle:user:questionDemo2.html.twig', array(
            'question' => $question,
            'form' => $form->createView()
        ));
    }

    public function questionDemo3Action(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $question = $em->getRepository('InseadBundle:Questions')->findOneById(3);

        $answer = new Answer();
        $form = $this ->createForm(AnswerType::class, $answer, array(
            'idQuestion' => 3,
            'question' => $question
        ));

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($answer);
            $em->flush();

            return $this->redirectToRoute('insead_questionDemo4');
        }

        return $this->render('InseadBundle:user:questionDemo3.html.twig', array(
            'question' => $question,
            'form' => $form->createView()
        ));
    }

    public function questionDemo4Action(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $question = $em->getRepository('InseadBundle:Questions')->findOneById(4);

        $answer = new Answer();
        $form = $this ->createForm(AnswerType::class, $answer, array(
            'idQuestion' => 4,
            'question' => $question
        ));

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($answer);
            $em->flush();

            return $this->redirectToRoute('insead_questionDemo5');
        }

        return $this->render('InseadBundle:user:questionDemo4.html.twig', array(
            'question' => $question,
            'form' => $form->createView()
        ));
    }
    public function questionDemo5Action(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $question = $em->getRepository('InseadBundle:Questions')->findOneById(5);

        $answer = new Answer();
        $form = $this ->createForm(AnswerType::class, $answer, array(
            'idQuestion' => 5,
            'question' => $question
        ));

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($answer);
            $em->flush();

            return $this->redirectToRoute('fos_user_registration_register');
        }

        return $this->render('InseadBundle:user:questionDemo5.html.twig', array(
            'question' => $question,
            'form' => $form->createView()
        ));
    }


}
