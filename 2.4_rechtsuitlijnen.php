<?php
function RechtsUitlijnen($str,$charlength){
    $space = $charlength - strlen($str);
    for ($i=0;$i<$space;$i++){
        print " ";
    }
    print $str."\n";
}
RechtsUitlijnen("banaan", 70);
RechtsUitlijnen("nog een banaan", 70);
RechtsUitlijnen("2.30 euro", 70);
RechtsUitlijnen("dit is een hele lange zin", 70);
RechtsUitlijnen("14.10 euro", 70);