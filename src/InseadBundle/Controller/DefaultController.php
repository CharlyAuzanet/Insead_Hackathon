<?php

namespace InseadBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('InseadBundle:user:index.html.twig');
    }
    public function rulesAction()
    {
        return $this->render('InseadBundle:user:rules.html.twig');
    }

}
