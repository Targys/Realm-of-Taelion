<?php

namespace App\Controller;

use App\Repository\ImagesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ImageController extends AbstractController
{
    /**
     * @Route("/image", name="image")
     */
    public function index(ImagesRepository $imagesRepo): Response
    {
        return $this->render('image/galerie.html.twig', [
            'controller_name' => 'ImageController',
            'image' => $imagesRepo->findAll(),
        ]);
    }
}
