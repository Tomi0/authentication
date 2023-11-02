<?php

namespace Authentication\Infrastructure\Symfony\Domain\Service\User;

use Authentication\Domain\Service\User\HashPassword;
use Symfony\Component\PasswordHasher\Hasher\PasswordHasherFactory;

class HashPasswordSymfonySecurity extends HashPassword
{

    public function handle(string $text): string
    {
        $factory = new PasswordHasherFactory([
            'common' => ['algorithm' => 'bcrypt'],
        ]);

        return $factory->getPasswordHasher('common')->hash($text);
    }
}