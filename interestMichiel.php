<?php
$kapitaal = readline("Wat is het kapitaal? ");
$intrest = readline("Wat is de intrest in %? ");
$looptijd = readline("Wat is de looptijd? ");
$answer = readline("Is er een limiet ? ");
$limiet = 0;
if ($answer == 'y') {
    $limiet = readline("Wat is het limiet? ");
}


function RechtsUitlijnen($tekst, $charlength)
{
    $lengte = $charlength - strlen($tekst);
    for ($i = 0; $i < $lengte; $i++) {
        print " ";
    }
    print $tekst;

}

function IntrestBerekening($kapitaal, $intrest, $looptijd, $limiet)
{
    print "      Jaar      Kapitaal      Rente\n";
    for ($i = 1; $i <= $looptijd; $i++) {
        if ($kapitaal > $limiet && $limiet > 0) {
            break;
        }
        $rente = $kapitaal / 100 * $intrest;
        RechtsUitlijnen($i, 6 + strlen("Jaar"));
        RechtsUitlijnen(number_format($kapitaal, 2), 6 + strlen("Kapitaal"));
        RechtsUitlijnen(number_format($rente, 2), 6 + strlen("Rente"));
        $kapitaal += $rente;
        print "\n";

    }
}

IntrestBerekening($kapitaal, $intrest, $looptijd, $limiet);