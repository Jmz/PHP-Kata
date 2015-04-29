<?php

class BowlingGame
{
    protected $rolls = [];

    public function roll($pins)
    {
        $this->rolls[] = $pins;
    }

    public function score()
    {
        $score = 0;
        $roll = 0;

        for($frame = 1; $frame <= 10; $frame++)
        {
            $frameScore = $this->rolls[$roll] + $this->rolls[$roll + 1];

            if ($frameScore === 10) {
                $frameScore += $this->rolls[$roll + 2];
            }

            $score += $frameScore;
            $roll += 2;
        }

        return $score;
    }
}
