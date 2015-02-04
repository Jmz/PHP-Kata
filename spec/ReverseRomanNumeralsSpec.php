<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ReverseRomanNumeralsSpec extends ObjectBehavior
{
    public function it_returns_1_for_I()
    {
        $this->generate('I')->shouldReturn(1);
    }

    public function it_returns_2_for_II()
    {
        $this->generate('II')->shouldReturn(2);
    }

    public function it_returns_3_for_III()
    {
        $this->generate('III')->shouldReturn(3);
    }

    public function it_returns_4_for_IV()
    {
        $this->generate('IV')->shouldReturn(4);
    }

    public function it_returns_5_for_V()
    {
        $this->generate('V')->shouldReturn(5);
    }

    public function it_returns_6_for_VI()
    {
        $this->generate('VI')->shouldReturn(6);
    }

    public function it_returns_900_for_CM()
    {
        $this->generate('CM')->shouldReturn(900);
    }

    public function it_returns_1500_for_MD()
    {
        $this->generate('MD')->shouldReturn(1500);
    }
}
