<?php

namespace swdt\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class swdtUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
