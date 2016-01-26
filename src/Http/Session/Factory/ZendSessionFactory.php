<?php

namespace Dragonmantank\Http\Session\Factory;

use Dragonmantank\Http\Session\SessionContainer;
use Interop\Container\ContainerInterface;
use Zend\Session\Container;
use Zend\Session\SessionManager;

class ZendSessionFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $manager = new SessionManager();
        Container::setDefaultManager($manager);

        $realSessionContainer = new Container('zend_expressive');

        return new SessionContainer($realSessionContainer);
    }
}