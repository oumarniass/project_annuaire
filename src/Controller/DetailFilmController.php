<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DetailFilmController extends AbstractController
{
    /**
     * @Route("/detail", name="detail_film")
     */
    public function index()
    {
        return $this->render('detail_film/index.html.twig', [
            'controller_name' => 'DetailFilmController',
        ]);
    }
}
