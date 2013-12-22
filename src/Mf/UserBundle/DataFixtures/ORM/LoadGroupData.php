<?php

namespace Mf\UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Mf\UserBundle\Entity\Group;

class LoadGroupData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $groupUser = new Group('User');
        $groupUser->addRole('ROLE_USER');
        $this->addReference('group-user', $groupUser);
        $manager->persist($groupUser);

        $groupAdmin = new Group('Admin');
        $groupAdmin->addRole('ROLE_SUPER_ADMIN');
        $this->addReference('group-admin', $groupAdmin);
        $manager->persist($groupAdmin);

        $manager->flush();
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 13; // the order in which fixtures will be loaded
    }
}
