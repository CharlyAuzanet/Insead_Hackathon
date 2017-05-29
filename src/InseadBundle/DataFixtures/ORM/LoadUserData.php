<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use InseadBundle\Entity\User;

class LoadUserData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $UserAdmin = new User();
        $UserAdmin->setUsername("admin");
        $UserAdmin->setEmail("admin@gmail.com");
        $UserAdmin->setPlainPassword("admin");
        $UserAdmin->setSuperAdmin(true);
        $UserAdmin->setEnabled(true);


        $manager->persist($UserAdmin);
        $manager->flush();
    }

    public function getOrder()
    {
        return 1;
    }


}