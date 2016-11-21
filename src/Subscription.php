<?php

namespace Wimby\PubSub;

/**
 * Interface representing information about the subscription.
 */
interface Subscription {

    /**
     * @return bool if subscription is valid.
     */
    public function isValid();

    /**
     * @return Event event that the Subscription is registered to.
     */
    public function getEvent();

    /**
     * @return callable subscriber that the Subscription is registered with.
     */
    public function getSubscriber();

    /**
     * method for unregistering from Subject.
     */
    public function unSubscribe();
}
