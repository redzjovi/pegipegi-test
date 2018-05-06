<?php

require('Jovi_1.php');
$jovi1 = new Jovi_1;
echo $jovi1->generateFizzBuzzFizzBuzz1to100();
echo '<br />';

require('Jovi_2.php');
$jovi2 = new Jovi_2;
echo $jovi2->generateEvenOddPrime(9, 12);
echo '<br />';

require('Jovi_3.php');
$jovi3 = new Jovi_3;
echo $jovi3->generateTextUppercaseWithoutVowelWithoutNumber('Suasana pergantian tahun 2013 ke 2014 sangat meriah');
echo '<br />';
