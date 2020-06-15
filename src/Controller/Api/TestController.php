<?php

namespace App\Controller\Api;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    /**
     * @Route("/api/test", name="api_test")
     */
    public function index()
    {
        return new JsonResponse([$this->getUser()->getUsername()], 200);
    }
}
