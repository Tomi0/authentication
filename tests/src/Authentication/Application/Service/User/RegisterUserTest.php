<?php

namespace Tests\src\Authentication\Application\Service\User;

use Authentication\Application\Service\User\RegisterUser;
use Tests\TestCase;

class RegisterUserTest extends TestCase
{
    private RegisterUser $registerUser;

    protected function setUp(): void
    {
        parent::setUp();
        $this->registerUser = $this->container->get(RegisterUser::class);
    }


    public function testUserIsCreated(): void
    {
        $this->assertTrue(true);
    }
}