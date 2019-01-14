<?php

namespace App\Controller;
use App\Entity\Film;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ListeFilmController extends AbstractController
{
    /**
     * @Route("/list", name="liste_film", methods={{"GET"}})
     */
    public function index( FilmRepository $filmrepository):Response
    {

        return $this->render('liste_film/index.html.twig', [
            'film' => $filmrepository->findAll(),
        ]);
    }
}
