<?php

namespace Mf\ManagerBundle\Entity;

use Doctrine\ORM\EntityRepository;

class MfUserRepository extends EntityRepository
{
    public function getByPosts($posts)
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT u FROM MfManagerBundle:MfUser u WHERE u.posts > :posts'
            )
            ->setParameter('posts', $posts)
            ->getResult();
    }
}

?>