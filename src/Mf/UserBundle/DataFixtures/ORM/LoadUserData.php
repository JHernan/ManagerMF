<?php

namespace Mf\UserBundle\DataFixtures\ORM;

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
        $salt = '123456';
        $raw = '123456';
        $users = array(
                        array(
                            'name' => 'Admin',
                            'email' => 'admin@test.com',
                            'salt' => $salt,
                            'password' => md5(md5($raw) . $salt),
                            'enabled' => 1,
                            'group' => 'group-admin'
                            ),
                        array(
                            'name' => 'ACastilla',
                            'email' => 'test+1@test.com',
                            'salt' => $salt,
                            'password' => md5(md5($raw) . $salt),
                            'enabled' => 1,
                            'group' => 'group-user'
                            ),
                        array(
                            'name' => 'Rai',
                            'email' => 'test+2@test.com',
                            'salt' => $salt,
                            'password' => md5(md5($raw) . $salt),
                            'enabled' => 1,
                            'group' => 'group-user'
                            ),
                        array(
                            'name' => 'Arvin',
                            'email' => 'test+3@test.com',
                            'salt' => $salt,
                            'password' => md5(md5($raw) . $salt),
                            'enabled' => 1,
                            'group' => 'group-user'
                            ),
                        array(
                            'name' => '7Sins',
                            'email' => 'test+4@test.com',
                            'salt' => $salt,
                            'password' => md5(md5($raw) . $salt),
                            'enabled' => 1,
                            'group' => 'group-user'
                            ),
                        array(
                            'name' => 'Deco',
                            'email' => 'test+5@test.com',
                            'salt' => $salt,
                            'password' => md5(md5($raw) . $salt),
                            'enabled' => 1,
                            'group' => 'group-user'
                            ),
                        );
        foreach($users as $item):
            $user = new User();
            $user->setUsername($item['name']);
            $user->setEmail($item['email']);
            $user->setSalt($item['salt']);
            $user->setPassword($item['password']);
            $user->setEnabled($item['enabled']);
            $user->addGroup($this->getReference($item['group']));

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
        return 14; // the order in which fixtures will be loaded
    }
}

?>