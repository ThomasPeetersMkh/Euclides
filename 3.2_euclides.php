<?php
$g1 = readline("Geef een getal aub: ");
$g2 = readline("Geef nog een getal aub: ");

function Euclides($getal1,$getal2){
    while ($getal1!=$getal2){
        if($getal1>$getal2){
            $getal1 -= $getal2;

        }else{
            $getal2 -=$getal1;
        }
    }
    return $getal1;
}

print "De grootste gemeenschappelijke deler van ". $g1 . " en ". $g2 . " is ". Euclides($g1,$g2);


