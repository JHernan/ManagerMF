<?php

namespace Mf\ManagerBundle\Service;

use Symfony\Component\Security\Core\Encoder\PasswordEncoderInterface;

class VBulletinEncoder implements PasswordEncoderInterface
{

    public function encodePassword($raw, $salt)
    {
        return md5(md5($raw) . $salt);
    }

    public function isPasswordValid($encoded, $raw, $salt)
    {
        return $encoded === $this->encodePassword($raw, $salt);
    }

}
