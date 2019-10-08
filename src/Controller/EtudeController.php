<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class EtudeController extends AbstractController
{
    /**
     * @Route("/etude", name="etude")
     */
    public function index()
    {
        return $this->render('etude/index.html.twig', [
            'controller_name' => 'EtudeController',
        ]);
    }
}
