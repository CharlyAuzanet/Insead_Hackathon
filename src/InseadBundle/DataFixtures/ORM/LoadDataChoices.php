<?php

namespace InseadBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use InseadBundle\Entity\Choices;
use Symfony\Component\Validator\Constraints\Choice;

class LoadDataChoices extends AbstractFixture implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $choice1 = new Choices();
        $choice1->setContent('Asian');

        $choice2 = new Choices();
        $choice2->setContent('White');

        $manager->persist($choice1);
        $manager->persist($choice2);
        $this->addReference('Asian', $choice1);
        $this->addReference('White', $choice2);
        $manager->flush();

    }

    public function getOrder()
    {
        return 4;
    }


}