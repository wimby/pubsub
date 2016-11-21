<?php

namespace Wimby\PubSub;


interface Subject
{
    /**
     * Delivers $event to each subscriber that was registered to that $event or any
     * parent of that $event.
     * @param Event $event
     */
    public function dispatch(Event $event);

    /**
     * Registers $subscriber to $event and any Events that are parent of $event.
     *
     * @param Subscriber $subscriber Subscriber to be registered for an event.
     * @param Event $event Optional fully qualified class name that extends or is Event
     * if null is provided Event class is used.
     * @return Subscription
     */
    public function subscribe(Subscriber $subscriber, Event $event = null);

    public function getSubscriptions(Event $event = null);
}
