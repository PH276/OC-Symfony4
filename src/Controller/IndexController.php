<?php

namespace App\Controller;

//use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class IndexController extends AbstractController
{
    /**
     * @Route(
     *  "/hello-world",
     *  name="world",
     *  methods={"GET"}
     * )
     */
    public function helloWord(): Response
    {
        return new Response('<h1>Hello World</h1>');
    }

    /**
     * @Route(
     *  "/hello-world/{postId}",
     *  name="name",
     *  methods={"GET"}
     * )
     */
    public function helloName($postId): Response
    {
        return new Response('<h1>Hello '.ucfirst($postId).'</h1>');
    }
}
