<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class RomanNumeralsSpec extends ObjectBehavior
{
    public function it_returns_I_for_1()
    {
        $this->generate(1)->shouldReturn('I');
    }

    public function it_returns_II_for_2()
    {
        $this->generate(2)->shouldReturn('II');
    }

    public function it_returns_III_for_3()
    {
        $this->generate(3)->shouldReturn('III');
    }

    public function it_returns_IV_for_4()
    {
        $this->generate(4)->shouldReturn('IV');
    }

    public function it_returns_V_for_5()
    {
        $this->generate(5)->shouldReturn('V');
    }

    public function it_returns_VI_for_6()
    {
        $this->generate(6)->shouldReturn('VI');
    }

    public function it_returns_VIII_for_8()
    {
        $this->generate(8)->shouldReturn('VIII');
    }

    public function it_returns_IX_for_9()
    {
        $this->generate(9)->shouldReturn('IX');
    }

    public function it_returns_X_for_10()
    {
        $this->generate(10)->shouldReturn('X');
    }

    public function it_returns_XX_for_20()
    {
        $this->generate(20)->shouldReturn('XX');
    }

    public function it_returns_XXI_for_21()
    {
        $this->generate(21)->shouldReturn('XXI');
    }

    public function it_returns_L_for_50()
    {
        $this->generate(50)->shouldReturn('L');
    }

    public function it_returns_C_for_100()
    {
        $this->generate(100)->shouldReturn('C');
    }

}
