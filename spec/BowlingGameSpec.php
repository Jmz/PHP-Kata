<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class BowlingGameSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('BowlingGame');
    }

    public function it_should_return_zero_for_all_zeros()
    {
        for($i = 0; $i < 20; $i++)
        {
            $this->roll(0);
        }

        $this->score()->shouldBe(0);
    }

    public function it_should_return_1_for_1_pin()
    {
        $this->roll(1);

        for($i = 0; $i < 19; $i++)
        {
            $this->roll(0);
        }

        $this->score()->shouldBe(1);
    }

    public function it_should_return_20_for_1_pin_20_times()
    {
        for($i = 0; $i < 20; $i++)
        {
            $this->roll(1);
        }

        $this->score()->shouldBe(20);
    }

    public function it_should_give_a_bonus_for_a_spare()
    {
        $this->roll(5);
        $this->roll(5);
        $this->roll(4);

        for($i = 0; $i < 17; $i++)
        {
            $this->roll(0);
        }

        $this->score()->shouldBe(18);
    }
}
