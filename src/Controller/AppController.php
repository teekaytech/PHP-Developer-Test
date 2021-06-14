<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AppController extends AbstractController
{
    /**
     * @Route("/dashboard", name="dashboard")
     */
    public function index(): Response
    {
        return $this->render('app/index.html.twig', [
            'user' => $this->getUser(),
        ]);
    }

    /**
     * @Route("/page/{id}", name="show")
     */
    public function show(Request $request): Response
    {
        $id = $request->get('id');
        return $this->render('app/show.html.twig', [
            'id' => $id,
            'user' => $this->getUser(),
        ]);
    }

}