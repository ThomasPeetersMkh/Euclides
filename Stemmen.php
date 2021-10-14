<?php
//declaratie van de variablen
$stemmen =  [
    "NVA"=> 2455,
    "SP-A"=> 2856,
    "CD&V"=> 1501,
    "GROEN"=> 1744,
    "OPEN-VLD"=> 1988,
    "VLAAMSBELANG"=> 586,
    "PVDA"=> 697
];
$totaalstemmen = 0;
$totaalpercent = 0;

//functies
function RechtsUitlijnen($str,$charlength){
    $space = $charlength - strlen($str);
    for ($i=0;$i<$space;$i++){
        print " ";
    }
    print $str;
}

//uitwerking van het programma
foreach ($stemmen as $key => $value){
    $totaalstemmen+=$value;
}


printf("Totaal aantal stemmen: %d\n\n",$totaalstemmen);

foreach ($stemmen as $key => $value){
    $percent = number_format($value/$totaalstemmen*100,2);
    print($key);
    RechtsUitlijnen($percent,33-strlen($key));
    print("\n");
    $totaalpercent += $percent;
}

printf("\nTotaal van de percentages: %.2f",$totaalpercent);
