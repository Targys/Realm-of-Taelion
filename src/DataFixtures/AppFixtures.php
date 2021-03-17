<?php

namespace App\DataFixtures;

use App\Entity\LogAdmin;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{
	public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {
         $logAdmin = new LogAdmin();
         $logAdmin->setUsername('Admin');
         $password = $this->encoder->encodePassword($logAdmin, '123456');
         $logAdmin->setPassword($password);
         $logAdmin->setRoles(['']);
         $manager->persist($logAdmin);

        $manager->flush();
    }
}
