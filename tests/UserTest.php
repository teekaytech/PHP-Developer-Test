<?php

namespace App\Tests;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UserTest extends WebTestCase
{
    public function testUserModelSettersAndGetters(): void
    {
        $user = new User();
        $user->setName('teekay');
        $user->setUsername('teekay');
        $user->setRoles(['ROLE_PAGE_1']);

        $this->assertEquals('teekay', $user->getName());
        $this->assertEquals('teekay', $user->getUsername());
        $this->assertEquals(['ROLE_PAGE_1'], $user->getRoles());
        $this->assertEquals(false, $user->isAdmin());
        $this->assertEquals(true, $user->isUser());

        $user->setRoles(['ROLE_ADMIN']);

        $this->assertEquals(true, $user->isAdmin());
    }
}
