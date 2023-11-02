<?php

namespace Authentication\Infrastructure\Doctrine\Domain\Model\User;

use Authentication\Domain\Model\User\User;
use Authentication\Domain\Model\User\UserRepository;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Ramsey\Uuid\Uuid;

class UserDoctrineRepository extends ServiceEntityRepository implements UserRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, User::class);
    }

    public function persist(User $user): void
    {
        $em = $this->getEntityManager();
        $em->persist($user);
        $em->flush();
    }

    public function nextId(): string
    {
        return Uuid::uuid4();
    }
}