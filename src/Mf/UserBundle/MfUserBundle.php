<?php

namespace Mf\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class MfUserBundle extends Bundle
{
	public function getParent()
    {
        return 'FOSUserBundle';
    }
}
