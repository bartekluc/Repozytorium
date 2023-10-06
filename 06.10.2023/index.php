<?php

$variable = 'aaaa';

echo $variable . '<br />';

$variable = 'bbbb';

echo $variable . "<br />";

function a(){
    $variable = 'cccc'; //to sie nie zmieni
}

a();

echo $variable . "<br />";

function b(){   //gdy sie dopisze global to zmieni się
    global $variable;

    $variable = 'dddd';
}

b();

echo $variable . "<br />";

function c(){
    global $new;

    $new = 'new';
}
c();

global $new;

echo $new . "<br />";

include './other.php';

global $othervariable;

echo $othervariable . "<br />";

d();

$a = 5;

echo $a . "<br />";

function e($a){
    $a = 10;
}

e($a);

echo $a . "<br />";

function f(&$a){
    $a = 10;
}

f($a);

echo $a . "<br />";