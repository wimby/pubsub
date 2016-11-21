<?php

namespace Wimby\PubSub;


trait ObservableTrait {

    protected $subscriptions = [];

    public function subscribe(Subscriber $subscriber, Event $event = null) {
        
    }

    public function getSubscriptions(Event $event) {
    }
}
