<?php

namespace App\Controller\Api;

use App\Services\Users\UsersService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class UsersController
 * @package App\Controller\Api
 * @Route("/api/users")
 */
class UsersController extends AbstractController
{
    /**
     * @var UsersService
     */
    private $userService;

    /**
     * UsersController constructor.
     * @param UsersService $userService
     */
    public function __construct(
        UsersService $userService
    ) {
        $this->userService = $userService;
    }

    /**
     * @Route("/create", name="api_users_create", methods={"POST"})
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function create(Request $request)
    {
        return $this->userService->create($request);
    }

    /**
     * @Route("/login", name="api_users_login", methods={"POST"})
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function login(Request $request)
    {
        return $this->userService->login($request);
    }
}
