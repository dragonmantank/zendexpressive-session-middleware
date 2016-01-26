<?php

namespace Dragonmantank\Http\Session;

/**
 * Class SessionContainer
 * @package Dragonmantank\Http\Session
 */
class SessionContainer
{
    protected $session;

    public function __construct($session)
    {
        $this->session = $session;
    }

    public function getSession()
    {
        return $this->session;
    }
}