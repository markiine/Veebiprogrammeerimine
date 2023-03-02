<?php

echo 'Ülesanne 0301

Luua massiivi nimega "loomad" elementidega Karu, Jänes, Hunt, Rebane, Hirv, Hiir, Põder, Ahv, Mäger, Mutt. Karu massiivi elemendi number olgu 0, Jänesel 1 jne.

Teha funktsioon nimega "kuva_massiiv". Funktsiooni sisendargumendiks olgu massiiv mida soovime välja kuvada. Funktsiooni sees lugeda funktsiooniga "sizeof" elemendid kokku ja väljastada tsükliga kõik masiivi elemendid üksteise alla. Kuvatud elemendi ette panna ka massiivi elemendi number. Kuvamisel panna kõige lõppu panna paragrafi tag (< p >). <p>

Näide:<p>
0. Karu<p>
1. Jänes<p>
2. Hunt<p>
jne. <p>
<br>';

/*Lisainfona mainiks, et peale 0301-0303 ülesannet peaks tulema umbes selline programm:

funktsioon kuva_massiiv
funktsioon vaheta_elemendid
funktsioon kustuta_element

tee massiiv
kuva_massiiv
vaheta_elemendid
kuva_massiiv
kustuta_element
kuva_massiiv.*/


$animals = array("Karu", "Jänes", "Hunt", "Rebane", "Hirv", "Hiir", "Põder", "Ahv", "Mäger", "Mutt");

function kuva_massiiv($massiiv)
{
    $suurus = sizeof($massiiv);
    for ($i = 0; $i < $suurus; $i++)
    {
        echo "$i. " . $massiiv[$i] . "<p>";
    }
}
    kuva_massiiv($animals);

