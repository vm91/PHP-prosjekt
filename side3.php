<?php
session_start();
echo "<h3>Dette er side 3</h3>";



$melding = "Navn : ".$_SESSION["Navn"]. "\r\n";
$melding .= "Adresse : ".$_SESSION["Adresse"]. "\r\n";
$melding .= "Epost : ".$_SESSION["Epost"]. "\r\n";
$melding .= "Telefonnummer : ".$_SESSION["Telefonnummer"]. "\r\n";
$melding .= "Du er : ".$_SESSION["kunde"].  "\r\n";
$melding .= "Du har valgt spørsmåltype : ".$_SESSION["type"]. "\r\n";
$melding .= "Din beskjed : ".$_SESSION["beskjed"]."\r\n";

$meldinger = "Navn : ".$_SESSION["Navn"] . "<br/>";
$meldinger .= "Adresse : ".$_SESSION["Adresse"]. "<br/>";
$meldinger .= "Epost : ".$_SESSION["Epost"] . "<br/>";
$meldinger .= "Telefonnummer : ".$_SESSION["Telefonnummer"]. "<br/>";
$meldinger .= "Du er : ".$_SESSION["kunde"].  "<br/>";
$meldinger .= "Du har valgt spørsmåltype : ".$_SESSION["type"]. "<br/>";
$meldinger .= "Din beskjed : ".$_SESSION["beskjed"]."<br/>";

$epost = $_SESSION["Epost"];

  if (mail($epost, "Fra kunderservice", $melding)) {
    print ( "Følgende mail ble levert til $epost: \n" );
} 
  else { print ( "En feil oppstod ved sending av mail, Trykk back knappen og prøv på nytt.\n");}


$filref=fopen("side3fil.php","w"); 
fwrite($filref,"$meldinger");
fclose($filref);
$filref=fopen("side3fil.php","r");
$filstring=fgets($filref);
echo "Her er innholdet av filen : $meldinger <br/>".$filstring;
$filstring=fgets($filref);
echo $filstring;
fclose($filref);

?>
<a href="side4.php">Til side 4</a>