OBLIG 3 PHP <br/>
Oppgave 1 <br/>
<?php
$tabell= array("Br�d",20,"Egg",25,"Melk",15);
$tabell1= array("Br�d"=>20,"Egg"=>25,"Melk"=>15);

echo "<br/>";
foreach ($tabell1 as $n�kkel => $verdi)
{
	echo $n�kkel." til prisen av ". $verdi." kr<br/>"; 
}
?>

Oppgave 2 <br/>
<br/>
a) 
<?php
$tabell = array(1,4,8,1,4,10,5,6,2,4,6);
function antallVerdier ($tabell)
{    
return count($tabell);
}
echo "antall verdier ".antallVerdier ($tabell);
?>
<br/>
b) 
<?php
$tabell = array(1,4,8,1,4,10,5,6,2,4,6);
function sumTabell($innArray)
{
	$sum = 0;
	foreach	($innArray as $verdi)
	{
		$sum += $verdi;
	}
	return $sum;
}
$returnSum = sumTabell($tabell);
echo "Summen av arrayet er : $returnSum<br/> "
?>

<br/>
f) 
<?php
$tabell = array(1,4,8,1,4,10,5,6,2,4,6);
arsort ($tabell);
echo "N� er tabellen sortert i synkende rekkef�lge: <br/>";
print_r ($tabell);
echo "<br/>";
?>


<br/>
Gitt tallrekken: 1,4,8,1,4,10,5,6,2,4,6. Opprett et array for denne rekken av tall.
Lag funksjoner (5 ulike) for � h�ndtere arrayet. Funksjonene skal henholdsvis 
a)	Returnere antall elementer i lista.
b)	Returnere summen av elementene i lista.
c)	Finner ut hvor mange ganger et bestemt tall (som innparameter) forekommer i lista.
d)	Finner ut om et bestemt tall (som innparameter) forekommer i lista med en l�kke.
e)	Som d) men l�st med en innebygget PHP funksjon. 
f)	Som sorterer arrayet med en innebygd PHP funksjon i synkende rekkef�lge (st�rste tallet f�rst).


