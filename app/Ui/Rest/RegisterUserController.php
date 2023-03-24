<?php

namespace App\Ui\Rest;

use Authentication\Application\Service\User\CreateUser;
use Authentication\Application\Service\User\CreateUserRequest;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class RegisterUserController extends AbstractController
{
    public function __construct(private readonly CreateUser $createUser)
    {
    }

    public function __invoke(): Response
    {
        return new JsonResponse(
            $this->createUser->handle(new CreateUserRequest())
        );
    }
}