<?php

class Jovi_3
{
    public static function generateTextUppercaseWithoutVowelWithoutNumber($text)
    {
        // convert number to word
        $text = str_replace('0', 'nol', $text);
        $text = str_replace('1', 'satu', $text);
        $text = str_replace('2', 'dua', $text);
        $text = str_replace('3', 'tiga', $text);
        $text = str_replace('4', 'empat', $text);
        $text = str_replace('5', 'lima', $text);
        $text = str_replace('6', 'enam', $text);
        $text = str_replace('7', 'tujuh', $text);
        $text = str_replace('8', 'delapan', $text);
        $text = str_replace('9', 'sembilan', $text);

        // remove vowel
        $text = str_replace('a', '', $text);
        $text = str_replace('i', '', $text);
        $text = str_replace('u', '', $text);
        $text = str_replace('e', '', $text);
        $text = str_replace('o', '', $text);

        // convert all characters to uppercase
        $text = strtoupper($text);

        return $text;
    }
}
