<?php
$tekst = "Een chauffeur van een Litouwse vrachtwagen reed omstreeks 3 uur op de E403 richting Doornik toen 
hij ter hoogte van het op- en afrittencomplex Izegem-Roeselare Haven werd verrast door een spookrijder. De bestuurder 
kwam uit de tegenovergestelde richting recht naar hem toe gereden. De vrachtwagenchauffeur kon 
de wagen niet meer ontwijken. De voertuigen botsten op het rechterrijvak tegen elkaar.De hulpdiensten kwamen 
ter plaatse, maar voor de bestuurder van de BMW kwam alle hulp te laat. De man overleed ter plaatse. De 
vrachtwagenchauffeur klaagde over pijn aan de buik, hij werd ter controle overgebracht naar het ziekenhuis.
Door het zware ongeval bleef de E403 enkele uren afgesloten voor het verkeer. Het verkeer op de E403 dat 
richting Doornik reed moest de snelweg verlaten via de afrit. Twee takelfirma’s kwamen ter plaatse om de betrokken 
voertuigen te takelen. Hoe het komt dat de bestuurder van de BMW tegen de richting in reed, is voorlopig onduidelijk.";
print $tekst."\n\n";
print substr($tekst,20,36)."\n\n";
print strlen($tekst)."\n\n";
print strpos($tekst,"buik")."\n\n";
print str_ireplace("e","x",$tekst);
if(!strpos($tekst,"666")) print "\n\n nothing found";