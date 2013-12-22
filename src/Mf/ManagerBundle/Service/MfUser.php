<?php

namespace Mf\ManagerBundle\Service;

use Doctrine\ORM\EntityManager;
use FOS\UserBundle\Model\UserManager;

class MfUser
{
    protected $em;
    protected $user_manager;
    protected $posts;

    public function __construct(EntityManager $em, UserManager $user_manager, $posts)
    {
        $this->em = $em;
        $this->user_manager = $user_manager;
        $this->posts = $posts;
    }

    public function updateUser()
    {
        $users = $this->em->getRepository('MfManagerBundle:MfUser')->getByPosts($this->posts);

        foreach($users as $item){
            if(!$this->user_manager->findUserByUsername($item->getUsername())){
                $user = $this->user_manager->createUser();
                $user->setUsername($item->getUsername());
                $user->setUsernameCanonical($item->getUsername());
                $user->setEmail($item->getEmail());
                $user->setEmailCanonical($item->getEmail());
                $user->setEnabled(true);
                $user->setSalt($item->getSalt());
                $user->setPassword($item->getPassword());

                $this->em->persist($user);
            }
        }

        $this->em->flush();
    }
}
