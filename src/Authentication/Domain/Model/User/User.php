<?php

namespace Authentication\Domain\Model\User;

use DateTime;
use Ramsey\Uuid\UuidInterface;

class User
{
    private UuidInterface $id;
    private string $firstName;
    private string $lastName;
    private string $email;
    private DateTime $createdAt;
    private DateTime $updatedAt;

    /**
     * @param string $firstName
     * @param string $lastName
     * @param string $email
     */
    public function __construct(string $firstName, string $lastName, string $email)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->createdAt = $this->updatedAt = new DateTime();
    }


    public function id(): UuidInterface
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