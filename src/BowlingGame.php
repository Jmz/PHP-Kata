<?php

class BowlingGame
{
    protected $score = 0;

    public function roll($roll)
    {
        $this->score += $roll;
    }

    public function score()
    {
        return $this->score;
    }
}