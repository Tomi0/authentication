<?php

namespace Authentication\Domain\Model\User;

use Ramsey\Uuid\UuidInterface;

class User
{
    private UuidInterface $id;
    private string $firstName;
    private string $lastName;
    private string $email;
}