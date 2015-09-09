<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SecuredController extends Controller
{
    public function indexAction()
    {
        return $this->render('secured/index.html.twig');
    }
}
