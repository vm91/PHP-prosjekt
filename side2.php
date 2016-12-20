<?php
session_start();
echo "<h3>Dette er side 2</h3>";

echo "Her detaljene fra forige side: <br/>";
echo "Navn : ".$_REQUEST["Navn"]."<br/>";
echo "Adresse : ".$_REQUEST["Adresse"]."<br/>";
echo "Epost : ".$_REQUEST["Epost"]."<br/>";
echo "Telefonnummer : ".$_REQUEST["Telefonnummer"]."<br/>";

$_SESSION["Navn"]=$_REQUEST["Navn"];
$_SESSION["Adresse"]=$_REQUEST["Adresse"];
$_SESSION["Epost"]=$_REQUEST["Epost"];
$_SESSION["Telefonnummer"]=$_REQUEST["Telefonnummer"];

if (isset ($_REQUEST["Send"]))   
{ 
echo "Du er : ".$_REQUEST["kunde"]."<br/>";
echo "Du har valgt spørsmåltype : ". $_REQUEST["type"]."<br/>";
echo "Din beskjed : ".$_REQUEST["beskjed"]."<br/>";
}

$_SESSION["kunde"]=$_REQUEST["kunde"];
$_SESSION["type"]=$_REQUEST["type"];
$_SESSION["beskjed"]=$_REQUEST["beskjed"];

echo "<br/>";
setlocale(LC_TIME,"no_NO");
date_default_timezone_set("Europe/Oslo");
echo strftime("I dag er det %A %d %B %Y || %H : %M : %S"); 
?>
<form action="side3.php" method="get">
<br/> <input type="submit" name="Send" value="Bekreft" />
