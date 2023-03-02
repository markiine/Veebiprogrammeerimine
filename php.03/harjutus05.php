<pre>
Ülesanne 0305 (vormistamisel kasutatud < pre >)

Teha funktsioon nimega "string_info". Funktsiooni sisendargumendiks olgu teksti string ($string). Funktsioon üleb: ,

1. Mis on selle stringi esimene täht ja viimane täht. Funkts. "strlen" leiab stringi pikkuse ja "echo $string[0]" kuvab esimese tähe.
2. Mitu tähte stringis on (strlen).
3. Kogu string tehaks läbiva väiketähega (strtolower) ja väljastatakse.
4. Kogu string tehaks läbiva suurtähega (strtoupper) ja väljastatakse.
5. Tsükliga loetakse kokku ja kuvatakse ekraanile mitu "a" tähte stringis esineb.
</pre>


<?php

/*
echo 'Ülesanne 0305

Teha funktsioon nimega "string_info". Funktsiooni sisendargumendiks olgu teksti string ($string). Funktsioon üleb: ,

1. Mis on selle stringi esimene täht ja viimane täht. Funkts. "strlen" leiab stringi pikkuse ja "echo $string[0]" kuvab esimese tähe.
2. Mitu tähte stringis on (strlen).
3. Kogu string tehaks läbiva väiketähega (strtolower) ja väljastatakse.
4. Kogu string tehaks läbiva suurtähega (strtoupper) ja väljastatakse.
5. Tsükliga loetakse kokku ja kuvatakse ekraanile mitu "a" tähte stringis esineb.<br>
<br>'; */

/* function string_info($string)
{
    if ($string === "")
    {
        echo "Tühja sõne kohta ei ole midagi öelda.<br>";
        return;
    }

    echo "INFO sõne kohta: $string<br>";
    echo "Sõne algab tähega \"" . $string[0] . "\".<br>";
    echo "Sõne lõppeb tähega \"" . $string[-1] . "\".<br>";
    echo "Sõnes on " . strlen($string) . " tähte.<br>";
    echo "Sõne väikeste tähtedega: " . strtolower($string) . "<br>";
    echo "Sõne suurte tähtedega: " . strtoupper($string) . "<br>";

    $aasidKokku = 0;
    for ($i = 0; $i < strlen($string); $i++)
    {
        if (strtolower($string[$i]) == "a")
        {
            $aasidKokku++;
        }
    }
    echo "Sõnes esineb $aasidKokku \"a\" tähte.<br>";
}

string_info("");*/

echo "Lahendus: <br>";

function string_info($string)
{
    $stringiPikkus = strlen($string);
    $viimaneTaht = $string[$stringiPikkus - 1];
    echo "1. Esimene täht on $string[0] ja viimane täht on $viimaneTaht.<br>";
    echo "2. Stringis on $stringiPikkus. tähte<br>";
    $vaikeSone = strtolower($string);
    echo "3. String läbiva väikse tähega: $vaikeSone.<br>";
    $suurSone = strtoupper($string);
    echo "4. String läbiva suure tähega: $suurSone.<br>";
    $loendur = 0;
    for ($i = 0; $i < $stringiPikkus; $i++)
    {
        if ($string[$i] == "a")
        {
            $loendur += 1;
        }
    }
    echo "5. Stringis on $loendur - 'a' tähte.<br>";
}

string_info("programmeerimine");

string_info("Life is full of priceless moments!");
string_info("Aasta film on \"AVATAR\"");
