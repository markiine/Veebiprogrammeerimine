<?php

echo 'Ülesanne 0205

Sisesta käsitsi 3x3 kahemõõtmeline massiiv. Massiivi elementideks pane filmide nimed.
Nt.
$mas[1][1]
$mas[1][2]
jne.

Väljasta massiiv tsükliga.<br>';

$movies = array
(
    array("Iron Man (2008)","Black Widow (2021)","Thor (2011)"),
    array("Captain Marvel (2018)","Doctor Strange (2016)","Guardians of the Galaxy (2014)")
);

for ($row = 0; $row < 2; $row++)
{
    for ($col = 0; $col < 3; $col++) {
        echo "<br>".$movies[$row][$col]."<br>";
    }
}




