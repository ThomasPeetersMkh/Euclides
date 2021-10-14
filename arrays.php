<?php
$lijst = [14, 5, 8, 9, 13, 18, 16, 25];
$G = Gemiddelde($lijst);
$gemiddelde = array_sum($lijst) / sizeof($lijst);
print($G)."\n";
print ($gemiddelde);

function Gemiddelde($lijst)
{
    $som = 0;
    $teller = 0;
    foreach ($lijst as $x) {
        $som += $x;
        $teller++;

    }
    return $som / $teller;
}