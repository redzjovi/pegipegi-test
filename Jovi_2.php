<?php

require_once('MathHelper.php');

class Jovi_2
{
    public static function generateEvenOddPrime($fromNumber, $toNumber)
    {
        $outputs = [];

        for ($i = $fromNumber + 1; $i <= $toNumber; $i++) {
            $outputs[$i] = $i.' is ';

            $evenOddPrime = [];
            MathHelper::isEven($i) ? $evenOddPrime[] = 'even' : '';
            MathHelper::isOdd($i) ? $evenOddPrime[] = 'odd' : '';
            MathHelper::isPrime($i) ? $evenOddPrime[] = 'prime' : '';

            $outputs[$i] .= implode(' ', $evenOddPrime);
        }

        return implode(', ', $outputs);
    }
}
