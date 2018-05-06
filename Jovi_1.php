<?php

require_once('MathHelper.php');

class Jovi_1
{
    public static function generateFizzBuzzFizzBuzz1to100($fromNumber = 1, $toNumber = 100)
    {
        $texts = [];

        for ($i = $fromNumber; $i <= $toNumber; $i++) {
            if (MathHelper::isFizzBuzz($i)) {
                $texts[] = 'FizzBuzz';
            } else if (MathHelper::isFizz($i)) {
                $texts[] = 'Fizz';
            } else if (MathHelper::isBuzz($i)) {
                $texts[] = 'Buzz';
            }
        }

        return implode(', ', $texts);
    }
}
