<?php

namespace Authentication\Domain\Service\User;

abstract class HashPassword
{
    public abstract function handle(string $text): string;
}