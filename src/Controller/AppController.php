<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

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
     * @Route("/page/1", name="page_one")
     * @Security("is_granted('ROLE_PAGE_1')")
     */
    public function pageOne(Request $request): Response
    {
        $id = $request->get('id');
        return $this->render('app/page_one.html.twig', [
            'user' => $this->getUser(),
        ]);
    }

    /**
     * @Route("/page/2", name="page_two")
     * @Security("is_granted('ROLE_PAGE_2')")
     */
    public function pageTwo(Request $request): Response
    {
        return $this->render('app/page_two.html.twig', [
            'user' => $this->getUser(),
        ]);
    }

}