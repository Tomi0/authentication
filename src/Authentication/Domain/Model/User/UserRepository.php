<?php

namespace Authentication\Domain\Model\User;

interface UserRepository
{
    public function persist(User $user): void;

    public function nextId(): string;
}