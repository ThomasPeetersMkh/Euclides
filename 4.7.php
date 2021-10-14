<?php
$tekst = "Ruim 50.000 kandidaten hengelen in Vlaanderen naar uw stem en hopen " .
    "straks gemeenteraadslid te worden. Het is maar de vraag of ze zo blij gaan " .
    "zijn als die droom in vervulling gaat. De inzet van de lokale verkiezingen, op " .
    "14 oktober, is heel precies in cijfers vastgelegd: er moeten 7.398 nieuwe " .
    "gemeenteraadsleden verkozen worden, verspreid over de 308 Vlaamse " .
    "gemeenten, plus 175 nieuwe provincieraadsleden.";

function SplitParagraph($tekst,$length){
    $max_chars = $length;
    $start_of_split = 0;
    $end_of_split = 0;

    while ($start_of_split<strlen($tekst)){
        $last_char = substr($tekst,$start_of_split+$max_chars,1);
        if($last_char!=" "&&($start_of_split+$max_chars)<strlen($tekst)){
            for($i=$max_chars;$i>0;$i--){
                $last_char = substr($tekst,$start_of_split+$i,1);
                if($last_char== " "){
                    $end_of_split = $i+1;
                    break;
                }
            }
        }else{
            $end_of_split=$max_chars+1;
        }
        $cut = substr($tekst,$start_of_split,$end_of_split);
        $start_of_split += $end_of_split;
        print $cut."\n";
    }
}

SplitParagraph($tekst,30);
print "\n\n";
SplitParagraph($tekst,50);