<?php

include_once "./grade.php";
include_once "./area.php";
include_once "./age.php";
include_once "./heading.php";
include_once "./bmi.php";
include_once "./currency.php";
include_once "./letter.php";
include_once "./loop-1.php";
include_once "./namta.php";
include_once "./code.php";




grade();


echo getArea('t', 100, 50);

age('Afroza', 2000);

echo getBMI(46, 1.584);

currency();

lettersize('l' , " I'M A BAD GIRL ");

// loop1();
// loop2();
// loop3();
loop4();

num();

cap();

otp();

pass();



echo main(' I love laravel', 'h2', 'green' );

