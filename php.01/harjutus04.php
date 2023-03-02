<?php

echo "Ülesanne 0104

Kuvada kahe FOR tsükkliga välja järgmine arvude jada järgmisel kujul:

1,0
1,1
1,2
1,3
1,4
1,5
1,6
1,7
1,8
1,9
2,0
2,1
... jne kuni
9,9<br>";

echo "LAHENDUS:<br>";

for ($i = 1; $i < 10; $i ++)
{
    for($j = 0; $j <10 ;$j++)
    {
        echo "$i,$j<br>";
    }
}

