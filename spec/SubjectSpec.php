<?php

namespace spec\Wimby\PubSub;

use Wimby\PubSub\Subject;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;


/**
 * Provides base test class for ensuring compliance with the Subject interface.
 */
abstract class SubjectSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType(Subject::class);
    }
}
