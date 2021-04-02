<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController
{
    // public function index()
    /**
     * @Route("/hello/{name}")
     */
    public function index($name)
    {
        // return new Response('Hello!');
        return new Response("Привет, $name!");
    }
}
?>