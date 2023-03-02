<?php

echo 'Ülesanne 0303

Jätkata eelmist ülesannet. 

Teha funktsioon nimega "kustuta_element". Funktsiooni sisendargumendiks olgu massiivi elemendi nr. mille väärtust soovime kustutada ja massiiv ise. Kustutatud elemendist järgmised liikugu ühe koha võrra ettepoole. Kustuta massiivi viimane tühi element funktsiooniga unset($mas[key]). Tagasta massiiv põhiprogrammile. Kustuta funktsiooniga element nr. 1 "Jänes". Kuvada "kuva_massiiv" funktsiooniga massiiv välja.

Näide:
Oli 0. Karu, 1. Jänes, 2. Hunt jne.
Peale kustutamist olgu 0. Karu, 1. Hunt jne.<br>
<br>';


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

function kustuta_element($e1, $mas)
{
    $suurus = sizeof($mas);
    for ($i = $e1; $i < $suurus - 1; $i++)
    {
        $mas[$i] = $mas[$i+1];
    }
    unset($mas[$suurus - 1]);

    return $mas;

}

echo "<p>Lahendus:(enne kui massiiv on muutmata) <br>";
kuva_massiiv($animals);

$animals = vaheta_elemendid(3,7,$animals);"<br>";

echo "<p>Lahendus:(muutsime rebase ja ahvi asukohad massiivis)<br>";
kuva_massiiv($animals);

$animals = kustuta_element(1,$animals);
echo "<p>Lahendus:(kustutame funktiooniga element nr. 1 ära ja väljastame massiivi): <br>";
kuva_massiiv($animals);




