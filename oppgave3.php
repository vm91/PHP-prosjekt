<?php


$navn = $_REQUEST["Navn"];
$adresse = $_REQUEST["Adresse"];
$epost = $_REQUEST["Epost"];
$telefonnummer = $_REQUEST["Telefonnummer"];
echo "Her detaljene fra forige side:";
echo "<br/>";

echo $navn." ".$adresse." ".$epost." ".$telefonnummer;
echo "<br/>";


if (isset ($_REQUEST["Send"]))   
{ 
echo "Du er : ".$_REQUEST["kunde"]."<br/>";
echo "Du har valgt spørsmåltype : ".$_REQUEST["type"]."<br/>";
echo "Din beskjed : ".$_REQUEST["beskjed"]."<br/>";
}



  if (mail($epost, "Fra kunderservice", $_REQUEST['beskjed'])) {
    print ( "Følgende mail ble levert til $epost: \n" );
} 
  else { print ( "En feil oppstod ved sending av mail.. trykk back og prøv på nytt.\n");}
  


echo "<br/>";
setlocale(LC_TIME,"no_NO");
date_default_timezone_set("Europe/Oslo");
echo"Idag er det";
echo date(' d. M. Y  H:i:s');

?>