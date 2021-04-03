<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

// class DefaultController
class DefaultController extends AbstractController
{
    // public function index()
    /**
     * @Route("/hello/{name}")
     */
    public function index($name)
    {
        // return new Response('Hello!');
        // return new Response("Привет, $name!");
        return $this->render('default/index.html.twig', [
            'name' => $name,
        ]);
    }

    /**
     * @Route("/simplicity")
     */
    public function simple()
    {
        return new Response('Просто! Легко! Прекрасно!');
    }
}
?>