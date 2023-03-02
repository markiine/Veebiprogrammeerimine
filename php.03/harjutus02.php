<?php

echo 'Ülesanne 0302

Jätkata eelmist ülesannet. 

Teha funktsioon nimega "vaheta_elemendid". Funktsiooni sisendargumendiks olgu kaks massiivi elemendi numbrit, mille kohtasid massiivis soovime vahetada ja massiiv ise. Kasutada tuleb funktsioonisisest lisamuutujat. Vahetada elementide "3. Rebane" ja "7. Ahv" massiivi kohad. Tagasta massiiv põhiprogrammile. Kuvada "kuva_massiiv" funktsiooniga massiiv välja.

Näide: 
Rebane jääb nr. 7-ks
Ahv jääb nr. 3-ks<br>
<br>';

/* function vaheta_elemendid($e1, $e2, $mas)  {

	$ajutine = $mas[$e1];
	$mas[$e1] = $mas[$e2];
	$mas[$e2] = $ajutine;

	return $mas;

}

$loomad = vaheta_elemendid(3, 7, $loomad);*/


$animals = array("Karu", "Jänes", "Hunt", "Rebane", "Hirv", "Hiir", "Põder", "Ahv", "Mäger", "Mutt");

function kuva_massiiv($massiiv)
{
    $suurus = sizeof($massiiv);
    for ($i = 0; $i < $suurus; $i++)
    {
        echo "$i. " . $massiiv[$i] . "<br>";
    }
}


function vaheta_elemendid($e1, $e2, $mas)
{

        $ajutine = $mas[$e1];
        $mas[$e1] = $mas[$e2];
        $mas[$e2] = $ajutine;

        return $mas;

}

echo "<p>Lahendus:(enne kui massiiv on muutmata) <br>";
kuva_massiiv($animals);

$animals = vaheta_elemendid(3,7,$animals);"<br>";

echo "<p>Lahendus:(muutsime rebase ja ahvi asukohad massiivis)<br>";
kuva_massiiv($animals);



