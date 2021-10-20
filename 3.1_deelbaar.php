<?php
function DeelbaarDoor($num,$deler){
    if($num%$deler==0){
        return true;
    }
    else{
        return false;
    }
}
$deler = 7;
for($i = 0;$i<20;$i++){
    $randomnr=random_int(100,999);
    print $randomnr;
    if(DeelbaarDoor($randomnr,$deler)){
        print " is deelbaar door ".$deler;
    }
    print "\n";
}