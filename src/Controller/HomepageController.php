<?php

namespace App\Controller;

use App\Entity\Feedback;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{
    #[Route('/', name: 'app_homepage', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('homepage/index.html.twig');
    }

    #[Route('/feedback', name: 'feedback', methods: ['POST'])]
    public function feedback(Request $request, EntityManagerInterface $sql)
    {
        $feedback = new Feedback();

        $feedback->setTitle($request->get('title'));
        $feedback->setDescription($request->get('description'));
        $feedback->setMail($request->get('mail'));
        $feedback->setTelegram($request->get('telegram'));
        $feedback->setUrl($request->get('url'));

        $sql->persist($feedback);
        $sql->flush();

        return $this->redirect('/');
    }
}
