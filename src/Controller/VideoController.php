<?php

namespace App\Controller;

use App\Repository\VideosRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VideoController extends AbstractController
{
    /**
     * @Route("/video", name="video")
     */
    public function index(VideosRepository $videosRepo): Response
    {
        return $this->render('video/video.html.twig', [
            'controller_name' => 'VideoController',
            'video' => $videosRepo->findAll(),
        ]);
    }
}
