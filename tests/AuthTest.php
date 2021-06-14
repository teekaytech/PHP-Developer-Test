<?php

namespace App\Tests;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AuthTest extends WebTestCase
{
    private KernelBrowser $client;
    private ?UserRepository $userRepo;

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->userRepo = static::$container->get(UserRepository::class);
    }

    public function testAdminCanVisitDashboard(): void
    {
        $testUser = $this->userRepo->findOneByUsername('admin');

        // simulate logging in the user
        $this->client->

        $this->client->request('GET', '/admin/dashboard');

        $this->assertResponseIsSuccessful();
    }
}
