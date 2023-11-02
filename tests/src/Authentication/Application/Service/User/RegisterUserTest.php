<?php

namespace Tests\src\Authentication\Application\Service\User;

use Authentication\Application\Service\User\RegisterUser;
use Authentication\Application\Service\User\RegisterUserRequest;
use Authentication\Domain\Model\User\User;
use Authentication\Domain\Model\User\UserRepository;
use Ramsey\Uuid\Uuid;
use Tests\TestCase;

class RegisterUserTest extends TestCase
{
    private RegisterUser $registerUser;


    public function testUserIsCreated(): void
    {
        $userRespository = $this->createMock(UserRepository::class);


        $uuid = Uuid::uuid4()->toString();

        $userRespository->expects($this->once())
            ->method('nextId')
            ->willReturn($uuid);

        $userRespository->expects($this->once())
            ->method('persist')
            ->with($this->callback(function ($arg) use ($uuid) {
                return $arg instanceof User && $arg->firstName() === 'paco' && $arg->lastName() === 'sol' && $arg->email() === 'ps@gmail.com' && $arg->id() === $uuid;
            }));

        $this->registerUser = new RegisterUser($userRespository);

        $this->registerUser->handle(new RegisterUserRequest('paco', 'sol', 'ps@gmail.com'));
    }
}