<?php

namespace Wimby\PubSub;


interface Subscriber {

    /**
     * This method is called when any Subject to which the Subscriber
     * is registered calls dispatch with event or any subclass of event which was
     * subscribed by the Subscriber.
     *
     * @param Event $event event that was dispatched with Subject.
     */
    public function handleEvent(Event $event);
}
