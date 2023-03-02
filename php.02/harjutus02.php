<?php


echo 'Ülesanne 0202

Lisa käsitsi massiivi 10 looma nime kasutades massiivi kohanäitu. Nt. $mas[0]="karu" jne.
Väljasta see "foreach" tsükkliga.<br>';

$loom[0] = "karu";
$loom[1] = "jänes";
$loom[2] = "kass";
$loom[3] = "koer";
$loom[4] = "hobune";
$loom[5] = "eesel";
$loom[6] = "madu";
$loom[7] = "hiir";
$loom[8] = "kala";
$loom[9] = "siil";

foreach ($loom as $x)
    {
        echo "$x <br>";
    }

