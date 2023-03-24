<?php

namespace Authentication\Application\Service\User;

class CreateUser
{

    public function __construct()
    {
    }

    public function handle(CreateUserRequest $createUserRequest): string
    {
        return 'new user';
    }
}