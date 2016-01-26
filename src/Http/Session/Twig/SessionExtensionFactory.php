<?php

namespace Dragonmantank\Http\Session\Twig;

use Interop\Container\ContainerInterface;

class SessionExtensionFactory
{
    /**
     * Creates a new Conversation Twig Extension
     *
     * @param ContainerInterface $container
     * @return SessionExtension
     */
    public function __invoke(ContainerInterface $container)
    {
        $sessionContainer = $container->get('SessionContainer');

        return new SessionExtension($sessionContainer->getSession());
    }
}