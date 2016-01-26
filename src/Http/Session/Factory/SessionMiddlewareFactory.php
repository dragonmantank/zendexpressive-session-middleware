<?php

namespace Dragonmantank\Http\Session\Factory;

use Dragonmantank\Http\Session\SessionMiddleware;
use Interop\Container\ContainerInterface;

class SessionMiddlewareFactory
{
    public function __invoke(ContainerInterface $container)
    {
        return new SessionMiddleware($container->get('SessionContainer'));
    }
}