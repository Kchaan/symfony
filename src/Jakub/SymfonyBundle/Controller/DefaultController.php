<?php

namespace Jakub\SymfonyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    public function indexAction($pozdrav)
    {
        $articles = $this->getDoctrine()->getRepository('JakubSymfonyBundle:Article')->vypis("IT");
        return $this->render('JakubSymfonyBundle::index.html.twig', array('pozdrav' => $pozdrav, 'articles' => $articles));
    }
}
