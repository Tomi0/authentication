<?php

namespace Tests;

use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\DependencyInjection\Container;

class TestCase extends WebTestCase
{
    protected Container $container;
    protected EntityManager $entityManager;
    protected KernelBrowser $client;

    protected function setUp(): void
    {
        parent::setUp();
        $this->client = static::createClient();
        $this->container = static::getContainer();
        $this->entityManager = $this->container->get('doctrine')->getManager();
    }

}