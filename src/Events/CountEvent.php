<?php

namespace Unleash\Events;

use Symfony\Component\EventDispatcher\Event;

class CountEvent extends Event
{
    private $name;
    private $enabled;

    public function __construct($name, $enabled)
    {
        $this->name = $name;
        $this->enabled = $enabled;
    }
}
