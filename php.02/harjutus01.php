<?php

echo 'Ülesanne 0201
<br>
Genereeri tsükliga 100 täisarvust koosnev massiiv.
Väljasta see "print_r" funktsiooniga.<br>';


for ($i = 0; $i < 100; $i++)
{
    $arvud[] = $i; //rand();
}

?>
<pre>
    <?php
        print_r($arvud);
    ?>
</pre>

