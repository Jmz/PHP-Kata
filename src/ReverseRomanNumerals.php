<?php

class ReverseRomanNumerals {

    public static $lookup = [
        900 => 'CM',
        1000 => 'M',
        400 => 'CD',
        500 => 'D',
        90 => 'XC',
        100 => 'C',
        40 => 'XL',
        50 => 'L',
        9 => 'IX',
        10 => 'X',
        4 => 'IV',
        5 => 'V',
        1 => 'I'
    ];

    public function generate($numerals)
    {
        $number = 0;

        foreach (static::$lookup as $value => $numeral) {

            $numerals = str_replace($numeral, '', $numerals, $removed);

            $number += ($value * $removed);

        }

        return $number;
    }
}
