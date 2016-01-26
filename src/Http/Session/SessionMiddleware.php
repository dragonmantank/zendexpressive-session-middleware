<?php

namespace Dragonmantank\Http\Session;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class SessionMiddleware
{
    protected $sessionContainer;

    public function __construct(SessionContainer $sessionContainer)
    {
        $this->sessionContainer = $sessionContainer;
    }

    public function __invoke(ServerRequestInterface $request, ResponseInterface $response, callable $next = null)
    {
        $request = $request->withAttribute('session', $this->sessionContainer->getSession());

        if ($next) {
            return $next($request, $response);
        }

        return $response;
    }
}