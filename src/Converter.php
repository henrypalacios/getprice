<?php


namespace App;


class Converter
{

    public static function converToNumber(string $text)
    {
        $number = floatval(preg_replace('/[^0-9]+/', '', $text));
        return number_format($number, 2, ',', '');
    }
}