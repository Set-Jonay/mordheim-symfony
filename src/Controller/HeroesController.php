<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HeroesController extends AbstractController
{
    /**
     * @Route("/heroes", name="heroes")
     */
    public function index()
    {
        return $this->render('heroes.html.twig');
    }
}