<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harjutus 0405</title>
</head>
<body>
<pre>

Ülesanne 0405

Genereeri kahe FOR tsükkliga 10x10 korrutustabel.
Korrutustabel peab olema tabeli sees.
Korrutustabelis peab olema esimesel real ja veerul numbrid 1-10.
Teisel real esimese rea ja veeru korrustis jne.

Näide: http://students.tmk.edu.ee/php/naited/ktabel.php

</pre>

<?php

echo "<table>";
for($x=1;$x<=10;$x++){
    echo "<tr>";

    if($x == 1){
        echo "<td></td>";
        for($i = 1; $i <= 10; $i++){
            echo "<td style='background-color:blue;'>".$i ."</td>";
        }
        echo "</tr><tr>";
    }
    for($y=1;$y<=10;$y++){

        if($y == 1){
            echo "<td style='background-color:blue;'>".$x ."</td>";
        }
        echo "<td>".$x*$y."</td>";

    }
    echo "</tr>";
}
echo "</table>";
?>

