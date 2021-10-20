<?php
$aantal_taarten = 0;
$aantal_deelnemers = 0;

$aantal_taarten = readline("Hoeveel taarten heb je?");
$aantal_deelnemers = readline("Hoeveel deelnemers heb je?");

function BerekenStukken($at,$ad){
    $minst = intdiv($ad,$at);
    $temp_aantal_taarten = $ad%$at;
    $gehele_taart = $at-$temp_aantal_taarten;
    printf("Je hebt %d taarten voor %d aantal personen. \n Je moet %d in %d stukken snijden \n",$at,$ad,$gehele_taart,$minst);
    if($temp_aantal_taarten>0){
        $verdeeld = $gehele_taart*$minst;
        $temp_aantal_deelnemers = $ad-$verdeeld;
        $rest = $temp_aantal_deelnemers/$temp_aantal_taarten;
        printf("En %d taarten in %d stukken",$temp_aantal_taarten,$rest);
    }

}
BerekenStukken($aantal_taarten,$aantal_deelnemers);
//printf("Je moet de taart in %d stukken snijden",BerekenStukken($aantal_taarten,$aantal_deelnemers));

