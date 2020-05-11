<?php

namespace Unleash\Events;

use Symfony\Component\EventDispatcher\Event;

class ErrorEvent extends Event
{
    private $err;

    public function __construct(array $err = [])
    {
        $this->err = $err;
    }

    public function getError()
    {
        return $this->err;
    }

    public function setError($error)
    {
        $this->err = $error;
    }
}
