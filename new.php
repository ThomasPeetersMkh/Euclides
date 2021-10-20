<?php
//dit is new.php

$a = 44;
$b = 8;
$c = intdiv($a,$b); //de gehele deling;
$d = $a%$b;         //de modulo
$bank = 9731111169%97;


print $c."\n";
print $d."\n";
print $bank."\n";
var_dump($a,$b,$c,$d,$bank);

$colors = ["rood",6,"geel",52.36];
var_dump($colors);