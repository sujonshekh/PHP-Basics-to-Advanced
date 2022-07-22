<?php

$planet = "Mercury";
$planetLarge ="Jupiter";

//1. Print formatting is multile printing method in php
printf("The Small Planet is %s and Largest is %s \n",strtoupper ($planet),($planetLarge));

echo "\n";

printf("The Small Planet is %s and Largest is %s", $planet, $planetLarge);

echo "\n";
echo "\n";
//2. BODMAS Border,Or,Division,Multiplacation,Addition,Substraction
// +,-,/,*,% Modulas its called Arithmetic Operator
//  $number = (45-12) in this operation number is here operand and "minus'-' is operator"
$number = (45-12) * (3+12) / (20*3); //BODMAS
echo "$number";


echo "\n";
// 3. Number plus minus shortcut
echo "\n";
$subs = 20;
$subs -= 5;

echo "$subs";

echo "\n";
// 4. ++  operator and -- operator
// $m = $n++ meaning is $m = $n and $n = $n + 1 
$n = 7;
$m = $n++;

echo "$m, $n";

echo "\n";
// .5  ++  operator
/*
$m = ++$n; meaning 
$n = $n + 1
$m = $n
*/
$n = 7;
$m = ++$n;

echo "$m, $n";