<?php

namespace Tests\src\Authentication\Domain\Service\User;

use Authentication\Domain\Service\User\HashPassword;
use Symfony\Component\PasswordHasher\Hasher\PasswordHasherFactory;
use Tests\TestCase;

class HashPasswordTest extends TestCase
{
    private HashPassword $hashPassword;

    public function testWorks(): void
    {
        $factory = new PasswordHasherFactory([
            'common' => ['algorithm' => 'bcrypt'],
        ]);
        $hasher = $factory->getPasswordHasher('common');

        $this->hashPassword = $this->container->get(HashPassword::class);

        $hasher->verify($this->hashPassword->handle('test_password'), 'test_password');
    }
}