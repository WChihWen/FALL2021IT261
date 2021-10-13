<?php

$a = '20';
$b = '30';
$c = $a + $b;
echo $c;
echo '<br>';

$a = '700';
$b = '330';
$c = $a - $b;
echo $c;
echo '<br>';

$a = '50';
$b = '5';
$c = $a * $b;
echo $c;
echo '<br>';

$money = 100;
$money /= 7;
$friendly_money = number_format($money,2);
echo $friendly_money;
echo '<br>';
//tow new functions rounding up and rounding down(floor and ceil)
$friendly_money = floor($money);
echo $friendly_money;
echo '<br>';
echo '<br>';
$friendly_money = ceil($money);
echo $friendly_money;
echo '<br>';
//Logic and calculations!!
//circumference of a circle circumference = 2 pie r
$radius = '10';
$pie = 3.14;
$curcynferebce = (2 * $pie) * $radius;
echo $curcynferebce;
// always think logic first
// 22 degrees celcius = ? in far?
// far = (C * 9/5) + 32
$celcius = 14;
$far = ($celcius * 9/5) + 32;
$friendly_far = floor($far);
echo '<br>';
echo ''.$friendly_far.' degrees';

//logic and the exchange rate
//cnadian = 100
//exchange = .79
echo '<br>';
$canada = 1433;
$canada *=.79;

echo $canada;
echo '<p>I have <b>'.$canada.'.</b> American dollars! </p>';

echo '<br>';
$canada = 1433;
$canada *=.79;
$friendly_canada = ceil($canada);
echo '<p>I have <b>'.$friendly_canada.'.</b> American dollars! </p>';



























?>