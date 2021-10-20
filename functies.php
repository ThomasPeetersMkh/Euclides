<?php




function Print5Times($tekst){
    for ($i=0;$i<5;$i++){
        print $tekst."\n";
    }
}

function OppervlakteRechthoek($b,$h){
    return $b*$h;
}
function VolumeBalk($b,$h,$d){
    return OppervlakteRechthoek($b,$h)*$d;
}

//Print5Times("cool");
//printf("De oppervlakte van de rechthoek: %d", OppervlakteRechthoek(5,2));
printf("Het volume bedraagt: %d",VolumeBalk(5,2,10));
