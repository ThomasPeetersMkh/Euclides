<?php
$lengte_kamer = readline("Wat is de lengte van de kamer?");
$breedte_kamer = readline("Wat is de breedte van de kamer");
$tegel_x = readline("Hoe lang is de tegel?");
$tegel_y = readline("hoe breed is de tegel?");

function BerekenTegels($l,$b,$tl,$tb){
    $aantal_tegels_lengte = ceil($l/$tl);
    $aantal_tegels_breedte = ceil($b/$tb);
    return $aantal_tegels_breedte*$aantal_tegels_lengte;
}

$aantal_tegels = BerekenTegels($lengte_kamer,$breedte_kamer,$tegel_y,$tegel_y);

printf("Je moet %d tegels van %f x %f meter kopen voor een kamer van %d op %d meter", $aantal_tegels,$tegel_x,$tegel_y,$lengte_kamer,$breedte_kamer);