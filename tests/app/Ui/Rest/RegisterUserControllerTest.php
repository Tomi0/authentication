<?php

namespace Tests\app\Ui\Rest;

use Authentication\Domain\Model\User\User;
use Ramsey\Uuid\Uuid;
use Tests\TestCase;

class RegisterUserControllerTest extends TestCase
{
    public function test(): void
    {
        $response = $this->client->request('POST', '/register-user', [
            'first_name' => 'paco',
            'last_name' => 'sol',
            'email' => 'ps@gmail.com',
        ]);

        $this->assertResponseIsSuccessful();
        $user = $this->entityManager->getRepository(User::class)->findOneBy(['email' => 'ps@gmail.com']);

        $this->assertIsString($user->id());
        $this->assertTrue(Uuid::isValid($user->id()));
        $this->assertSame('paco', $user->firstName());
        $this->assertSame('sol', $user->lastName());
    }
}