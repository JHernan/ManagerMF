<?php

namespace Mf\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class MfUserBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'ApplicationSonataUserBundle';
    }
}
