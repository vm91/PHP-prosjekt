<?php
echo "<h3>Dette er side 4</h3>";

$filref=fopen("side3fil.php","r"); 
fwrite($filref,"$meldinger");
fclose($filref);
$filref=fopen("side3fil.php","r");
$filstring=fgets($filref);
echo "Her er innholdet av filen : $meldinger <br/>".$filstring;
$filstring=fgets($filref);
echo $filstring;
fclose($filref);
?>