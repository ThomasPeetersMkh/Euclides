<?php
$doorsnede = readline("Wat is de doorsnede van het zwembad?");
$hoogte = readline("Wat is de hoogte van het zwembad?");

$speciaal = readline("Is het een speciaal zwembad? (Y/N)");
if($speciaal=="Y"){
    $onderh= readline("wat is het onderbreedte");
}
function oppervlakte( $straal )
{
    $opp = round($straal ** 2 * pi(), 2);
    return $opp;
}

function BerekenLiters($straal,$h){
    $oppervlakte = oppervlakte($straal);
    $volume = $oppervlakte*$h;
    return $volume*1000;
}
function BerekenLitersAK($straal_lower,$straal_higher,$h){
    return (1/3*pi())*$h*($straal_lower**2+$straal_higher*$straal_lower+$straal_higher**2)*1000;
}

if($speciaal=="N"){
    $liters = BerekenLiters($doorsnede/2,$hoogte);
}
else{
    $liters = BerekenLitersAK($onderh/2,$doorsnede/2,$hoogte);
}

printf("Een zwembad met een doorsnede van %d en een hoogte van %f bevat %fl water",$doorsnede,$hoogte,round($liters,2));