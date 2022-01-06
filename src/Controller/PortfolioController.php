<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PortfolioController extends AbstractController
{
    /**
     * @Route("/portfolio", name="portfolio")
     */
    public function portfolio(): Response
    {
        return $this->render('portfolio/index.html.twig', [
            'controller_name' => 'PortfolioController',
        ]);
    }
    /**
     * @Route("/portfolio/index", name="index")
     */
    public function index(): Response
    {
        return $this->render('portfolio/portfolio.html.twig', [
            'controller_name' => 'PortfolioController',
        ]);
    }
    /**
     * @Route("/portfolio/passion", name="passion")
     */
    public function passion(): Response
    {
        return $this->render('portfolio/passion.html.twig', [
            'controller_name' => 'PortfolioController',
        ]);
    }
    /**
     * @Route("/portfolio/cv", name="cv")
     */
    public function cv(): Response
    {
        return $this->render('portfolio/cv.html.twig', [
            'controller_name' => 'PortfolioController',
        ]);
    }
    /**
     * @Route("/portfolio/contact", name="contact")
     */
    public function contact(): Response
    {
        return $this->render('portfolio/contact.html.twig', [
            'controller_name' => 'PortfolioController',
        ]);
    }
    /**
     * @Route("/portfolio/competences", name="competences")
     */
    public function competences(): Response
    {
        return $this->render('portfolio/portfolio_2.html.twig', [
            'controller_name' => 'PortfolioController',
        ]);
    }
    /**
     * @Route("/portfolio/contribution", name="contribution")
     */
    public function contribution(): Response
    {
        return $this->render('portfolio/contribution.html.twig', [
            'controller_name' => 'PortfolioController',
        ]);
    }
	
}
