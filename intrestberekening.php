<?php
$kapitaal = readline("Wat is het kapitaal? ");
$interest = readline("Wat is de interest in procenten? ");
$looptijd = readline("Wat is de looptijd? ");
$limiet =  readline("Wat is de limiet? (0 indien geen limiet) ");
$rente = $kapitaal*($interest/100);
$spaces = 4;

function RechtsUitlijnen($str,$charlength){
    $space = $charlength - strlen($str);
    for ($i=0;$i<$space;$i++){
        print " ";
    }
    print $str;
}

print "Jaar    Kapitaal    Rente\n";
for ($i = 1; $i<=$looptijd;$i++){
    if($kapitaal>$limiet&&$limiet>0){
        break;
    }
    RechtsUitlijnen($i,strlen("Jaar"));
    RechtsUitlijnen(number_format($kapitaal,2),$spaces+strlen("Kapitaal"));
    RechtsUitlijnen(number_format($rente,2),$spaces+strlen("Rente"));
    $rente = $kapitaal*($interest/100);
    $kapitaal *= 1+($interest/100);
    print "\n";
}

