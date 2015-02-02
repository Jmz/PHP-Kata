<?php

class StringCalculator
{
    public function add($add)
    {
        $add = str_replace('\\n', ',', $add);
        $numbers = explode(',', $add);
        $total = 0;

        foreach($numbers as $number) {
            $total += $number;
        }

        return $total;
    }
}
