<?php

echo 'Ülesanne 0304

Kasutades arikmeetilist tehet moodul teha funktsioon nimega "nr_info", mille sisendargumendiks on täisarv ja mis: 

1. Teatab kasutajale kas tegu on paaris või paaritu arvuga.
Mooduli näide:
	12%2=0
	13%2=1
	14%2=0
2. Teatab kasutajale kas arv on suurem või väiksem kui 10.
3. Teatab kasutajale kas arv on suurem või väiksem kui 100.
4. Näitab kasutajale arvu ruudus.
5. Näitab kasutajale arvust ruutjuurt.

Käivita funktsioon 5 korda sisestades arvudeks: 1, 8, 9, 15, 200. <br>
<br>';

/*
function compareWithLimit($arv, $piir)
{
    echo "$arv on " . ($arv > $piir ? "suurem kui" : ($arv < $piir ? "väiksem kui" : "võrdne arvuga")) . "  $piir.<br>";
}

function nr_info($arv)
{
    if ($arv % 2 == 0) {
        echo "$arv on paarisarv.<br>";
    } else {
        echo "$arv on paaritu arv.<br>";
    }
    compareWithLimit($arv, 10);
    compareWithLimit($arv, 100);
    echo "$arv ruudus on " . $arv * $arv . ".<br>";
    echo "$arv ruutjuur on " . sqrt($arv) . ".<br>";
    echo "<br>";
}

nr_info(1);
nr_info(8);
nr_info(9);
nr_info(15);
nr_info(200);
nr_info(10);
nr_info(100);
*/



function nr_info($value){
    echo"<br>1.";
    if ($value % 2 == 0) {
        echo "Tegu on paaris arvuga.";
    } else {
        echo "Tegu on paaritu arvuga.";
    }
    echo "<br>2.";
    if ($value < 10){
        echo "Arv on väiksem kui 10.";
    } else {
        echo "Arv on suurem kui 10.";
    }
    echo "<br>3.";
    if ($value < 100){
        echo "Arv on väiksem kui 100.";
    } else {
        echo "Arv on suurem kui 100.";
    }
    $ruut = $value * $value;
    echo "<br>4.Arvu ruut on $ruut.";
    $ruutjuur = sqrt($value);
    echo "<br>5.Ruutjuur arvust on $ruutjuur";
}

echo "Käivatan funktiooni numbriga 1.";
nr_info(1);
echo "<p>Käivatan funktiooni numbriga 8.";
nr_info(8);
echo "<p>Käivatan funktiooni numbriga 9.";
nr_info(9);
echo "<p>Käivatan funktiooni numbriga 15.";
nr_info(15);
echo "<p>Käivatan funktiooni numbriga 200.";
nr_info(200);
