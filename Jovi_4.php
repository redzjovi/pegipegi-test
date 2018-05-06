<?php

require_once('Jovi_1.php');
require_once('Jovi_2.php');
require_once('Jovi_3.php');

use PHPUnit\Framework\TestCase;

class Jovi_4 extends TestCase
{
    public function testGenerateFizzBuzzFizzBuzz1to100()
    {
        print Jovi_1::generateFizzBuzzFizzBuzz1to100();
    }

    public function testGenerateEvenOddPrime()
    {
        $this->expectOutputString('10 is even, 11 is odd prime, 12 is even');
        print Jovi_2::generateEvenOddPrime(9, 12);
    }

    public function testGenerateTextUppercaseWithoutVowelWithoutNumber()
    {
        $this->expectOutputString('SSN PRGNTN THN DNLSTTG K DNLSTMPT SNGT MRH');
        print Jovi_3::generateTextUppercaseWithoutVowelWithoutNumber('Suasana pergantian tahun 2013 ke 2014 sangat meriah');
    }
}
