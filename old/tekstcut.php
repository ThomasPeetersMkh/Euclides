<?php
$tekst = "Ruim 50.000 kandidaten hengelen in Vlaanderen naar uw stem en hopen " .
    "straks gemeenteraadslid te worden. Het is maar de vraag of ze zo blij gaan " .
    "zijn als die droom in vervulling gaat. De inzet van de lokale verkiezingen, op " .
    "14 oktober, is heel precies in cijfers vastgelegd: er moeten 7.398 nieuwe " .
    "gemeenteraadsleden verkozen worden, verspreid over de 308 Vlaamse " .
    "gemeenten, plus 175 nieuwe provincieraadsleden";


$lengte_tekst = strlen($tekst);
$j = 0;
$i = 0;
$start_regel = 0;
$lengte_regel = 40;

while ($j <= $lengte_tekst) {
    $stukje_tekst = substr($tekst, $start_regel, $lengte_regel);
    $laatste_teken = substr($stukje_tekst, $lengte_regel - 1, 1);
    while ($laatste_teken != " ") {
        $laatste_teken = substr($stukje_tekst, $lengte_regel - (1 + $i), 1);
        $i++;
    }
    $stukje_tekst = substr($tekst, $start_regel, $lengte_regel -$i);
    print $stukje_tekst . "\n";
    $j += $lengte_regel;
    $start_regel += 40;
    $i = 0;
}
