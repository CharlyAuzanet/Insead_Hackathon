<?php

namespace InseadBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use InseadBundle\Entity\Questions;

class LoadDateQuestions extends LoadDataParameters implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {

        $q1 = new Questions();
        $q1->setParameters($this->getReference('demo'));
        $q1->setTitle("Which of the following best describes your race ?");

        $q2 = new Questions();
        $q2->setParameters($this->getReference('demo'));
        $q2->setTitle("What is your annual household gross income ? Drag to select");

        $q3 = new Questions();
        $q3->setParameters($this->getReference('demo'));
        $q3->setTitle("Employment :");

        $q4 = new Questions();
        $q4->setParameters($this->getReference('demo'));
        $q4->setTitle("Which of the following best describes your race ?");

        $q5 = new Questions();
        $q5->setParameters($this->getReference('demo'));
        $q5->setTitle("Number of children under 18 in your household ?");



        $manager->persist($q1);
        $manager->persist($q2);
        $manager->persist($q3);
        $manager->persist($q4);
        $manager->persist($q5);
        $manager->flush();

    }

    public function getOrder()
    {
        return 3;
    }


}