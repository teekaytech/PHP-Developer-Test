<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{
    private UserPasswordEncoderInterface $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {

        $user = new User();
        $user->setName('Admin');
        $user->setUsername('admin');
        $user->setRoles(["ROLE_ADMIN"]);

        $password = $this->encoder->encodePassword($user, 'adminpassword');
        $user->setPassword($password);

        $manager->persist($user);
        $manager->flush();
    }
}
