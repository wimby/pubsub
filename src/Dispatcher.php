<?php

namespace Wimby\PubSub;


interface Dispatcher {

    /**
     * Delivers $event to each subscriber that was registered to that $event or any
     * parent of that $event.
     * @param Event $event
     */
    public function dispatch(Event $event);
}
