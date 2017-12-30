<?php

namespace am\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class amUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
