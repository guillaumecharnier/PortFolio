<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PortFolioController extends AbstractController
{
    #[Route('/show', name: 'app_show_PortFolio')]
    public function index(): Response
    {
        return $this->render('port_folio/index.html.twig', [
            'controller_name' => 'PortFolioController',
        ]);
    }

    #[Route('/show/presentation', name: 'app_show_presentation')]
    public function showPresentation(): Response
    {
        return $this->render('port_folio/presentation.html.twig', [
            'controller_name' => 'PortFolioController',
        ]);
    }

    #[Route('/show/projet', name: 'app_show_projet')]
    public function showProject(): Response
    {
        return $this->render('port_folio/projet.html.twig', [
            'controller_name' => 'PortFolioController',
        ]);
    }

    #[Route('/show/pixelArt', name: 'app_show_pixelArt')]
    public function showPixelArt(): Response
    {
        return $this->render('port_folio/pixelArt.html.twig', [
            'controller_name' => 'PortFolioController',
        ]);
    }
}
