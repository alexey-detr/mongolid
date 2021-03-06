<?php

namespace Mongolid\Event;

/**
 * An intrface that should be implemented and injected in order to have events
 * triggered from Mongolid.
 *
 * @package Mongolid
 */
interface EventTriggerInterface
{
    /**
     * Triggers / Dispatchs a new event to the event handlers or listeners that
     * are being used.
     *
     * @param  string  $event   Identification of the event.
     * @param  mixed   $payload Data that is going to be sent to the event handler.
     * @param  boolean $halt    The output of the event handler will be used in a coditional inside the context of
     *                          where the event is being fired. This means that, if the event handler returns false,
     *                          it will probably stop the action being executed, for example, "saving".
     *
     * @return mixed            Event handler return. The importance of this return is determined by $halt
     */
    public function fire(string $event, $payload, bool $halt);
}
