<?php

namespace Authentication\Domain\Model\User;

use DateTime;
use Ramsey\Uuid\UuidInterface;

class User
{
    private string $id;
    private string $firstName;
    private string $lastName;
    private string $email;
    private string $password;
    private DateTime $createdAt;
    private DateTime $updatedAt;

    public function __construct(string $id, string $firstName, string $lastName, string $email, string $password)
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->createdAt = $this->updatedAt = new DateTime();
        $this->password = $password;
    }


    public function id(): string
    {
        return $this->id;
    }

    public function firstName(): string
    {
        return $this->firstName;
    }

    public function lastName(): string
    {
        return $this->lastName;
    }

    public function email(): string
    {
        return $this->email;
    }

    public function createdAt(): DateTime
    {
        return $this->createdAt;
    }

    public function updatedAt(): DateTime
    {
        return $this->updatedAt;
    }
}