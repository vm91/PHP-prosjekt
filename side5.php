<?php 
session_start(); 
if($_POST) 
{ 
        $tall = $_POST['linjenr']; 
        $filnavn = "side3fil.php"; 
        $file_handle = fopen($filnavn, "r"); 
        while (!feof($file_handle)) 
        { 
        $coarsy[] = fgets($file_handle); 
        } 
        fclose($file_handle); 
         
        unset($coarsy[$tall-1]);  
         
        $file_handle = fopen($filnavn, "w"); 
        foreach($coarsy as $coarsyboy) 
        { 
        fwrite($file_handle, $coarsyboy); 
        } 
        fclose($file_handle);    
        echo 'Linje har blitt slettet. Nå kan du åpne '.$filnavn.' og  se forandringen! Den fryder :)';  
} 
else 
{ 
        echo 'Skriv inn tall og trykk "Slett linje!"<br/>';      
} 
?> 
<form action="" method="post"> 
        Linje Nr: <input type="text" name="linjenr" value="" /> 
        <input type="submit" name="submit" value="Slett linje!" /> 
</form>

