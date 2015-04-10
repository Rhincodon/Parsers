<?php

namespace spec\Rhincodon\Parsers;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TagParserSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Rhincodon\Parsers\TagParser');
    }
}
