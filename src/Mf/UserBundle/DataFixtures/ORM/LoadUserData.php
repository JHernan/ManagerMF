<?php

namespace Mf\ManagerBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Mf\UserBundle\Entity\User;

class LoadUserData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $users = array(
                        array(
                            'name' => 'ACastilla',
                            'email' => 'test+1@test.com',
                            'salt' => '123456',
                            'password' => '123456',
                            'enabled' => 1
                            ),
                        array(
                            'name' => 'Rai',
                            'email' => 'test+2@test.com',
                            'salt' => '123456',
                            'password' => '123456',
                            'enabled' => 1
                            ),
                        array(
                            'name' => 'Arvin',
                            'email' => 'test+3@test.com',
                            'salt' => '123456',
                            'password' => '123456',
                            'enabled' => 1
                            ),
                        array(
                            'name' => '7Sins',
                            'email' => 'test+4@test.com',
                            'salt' => '123456',
                            'password' => '123456',
                            'enabled' => 1
                            ),
                        array(
                            'name' => 'Deco',
                            'email' => 'test+5@test.com',
                            'salt' => '123456',
                            'password' => '123456',
                            'enabled' => 1
                            ),
                        );
        foreach($users as $item):
            $user = new User();
            $user->setUsername($item['name']);
            $user->setEmail($item['email']);
            $user->setSalt($item['salt']);
            $user->setPassword($item['password']);
            $user->setEnabled($item['enabled']);

            $manager->persist($user);

            $this->addReference($item['name'], $user);
        endforeach;
        
        $manager->flush();
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 12; // the order in which fixtures will be loaded
    }
}

?>