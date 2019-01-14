<?php

namespace App\Controller;

use App\Entity\Film;
use App\Repository\FilmRepository;
use App\Repository\GenreRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;


class AccueilController extends AbstractController
{
    /**
     * @Route("/", name="liste_film", methods={"GET"})
     */
    public function index(FilmRepository $filmRepository): Response
    {

        return $this->render('index.html.twig', [
            'films' => $filmRepository->findAll(),

        ]);
    }
}
