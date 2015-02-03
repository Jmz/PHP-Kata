<?php

class RomanNumerals
{

    public static $lookup = [
        1000 => 'M',
        900 => 'CM',
        500 => 'D',
        400 => 'CD',
        100 => 'C',
        90 => 'XC',
        50 => 'L',
        40 => 'XL',
        10 => 'X',
        9 => 'IX',
        5 => 'V',
        4 => 'IV',
        1 => 'I'
    ];

    public function generate($number)
    {
        $solution = '';

        foreach(static::$lookup as $key => $numeral) {
            while ($number >= $key) {
                $solution .= $numeral;
                $number -= $key;
            }
        }

        return $solution;
    }
}
