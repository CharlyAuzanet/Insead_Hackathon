<?php

namespace InseadBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use InseadBundle\Entity\parameters;

class LoadDataParameters extends AbstractFixture implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {

        $parameters1 = new parameters();
        $parameters1->setValue('Demographic');
        $parameters1->setType('Demographic');

        $parameters2 = new parameters();
        $parameters2->setValue(500);
        $parameters2->setType('ad');


        $manager->persist($parameters1);
        $manager->persist($parameters2);
        $this->addReference('demo', $parameters1);
        $this->addReference('ad', $parameters2);
        $manager->flush();

    }

    public function getOrder()
    {
        return 2;
    }

}