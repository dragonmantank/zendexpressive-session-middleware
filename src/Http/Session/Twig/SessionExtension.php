<?php

namespace Dragonmantank\Http\Session\Twig;

class SessionExtension extends \Twig_Extension implements \Twig_Extension_GlobalsInterface
{
    protected $session;

    public function __construct($session)
    {
        $this->session = $session;
    }

    public function getGlobals()
    {
        return [
            'session' => $this->session,
        ];
    }

    public function getName()
    {
        return 'mentoring_session_extension';
    }
}