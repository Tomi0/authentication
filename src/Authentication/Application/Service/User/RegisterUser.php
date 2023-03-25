<?php

namespace Authentication\Application\Service\User;

use Authentication\Domain\Model\User\User;
use Authentication\Domain\Model\User\UserRepository;

class RegisterUser
{

    public function __construct(private readonly UserRepository $userRepository)
    {
    }

    public function handle(RegisterUserRequest $createUserRequest): void
    {
        $user = new User(
            $createUserRequest->firstName,
            $createUserRequest->lastName,
            $createUserRequest->email
        );

        $this->userRepository->persist($user);
    }
}