<?php

namespace InseadBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('InseadBundle:Default:index.html.twig');
    }
}
