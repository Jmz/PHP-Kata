<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class StringCalculatorSpec extends ObjectBehavior
{
    public function it_returns_0_for_empty_string()
    {
        $this->add('')->shouldReturn(0);
    }

    public function it_returns_1_for_1()
    {
        $this->add('1')->shouldReturn(1);
    }

    public function it_returns_2_for_1_1()
    {
        $this->add('1,1')->shouldReturn(2);
    }

    public function it_returns_2_for_1_1_1()
    {
        $this->add('1,1,1')->shouldReturn(3);
    }

    public function it_returns_6_for_3_3()
    {
        $this->add('3,3')->shouldReturn(6);
    }

    public function it_returns_5_for_1_1_1_1_1()
    {
        $this->add('1,1,1,1,1')->shouldReturn(5);
    }

    public function it_returns_2_for_1_1_with_newlines()
    {
        $this->add('1\\n1')->shouldReturn(2);
    }
}
