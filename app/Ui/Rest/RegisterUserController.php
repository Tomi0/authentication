<?php

namespace App\Ui\Rest;

use Authentication\Application\Service\User\RegisterUser;
use Authentication\Application\Service\User\RegisterUserRequest;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class RegisterUserController extends AbstractController
{
    public function __construct(private readonly RegisterUser $createUser)
    {
    }

    public function __invoke(Request $request): Response
    {
        return new JsonResponse(
            $this->createUser->handle(new RegisterUserRequest(
                $request->request->get('first_name') ?? '',
                $request->request->get('last_name') ?? '',
                $request->request->get('email') ?? '',
            ))
        );
    }
}