<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harjutus 0401</title>
</head>
<body>
<pre>
Ülesanne 0401

Tee massiiv kuhu pane järgmised andmed:
Nimi, aadress, pildi nimi (nt. vello.jpg), kodulehekülg (nt. aare.edu.ee)
Pilt salvesta ülesande kataloogi.
Tee HTML lehekülg kuhu kuva nmassiivist välja eelpool kirjeldatud andmed.
Nimi välja kuvamiseks kasuta &lt;b&gt; tagi.
Aadress välja kuvamiseks kasuta &lt;i&gt; tagi.
Pilt välja kuvamiseks kasuta &lt;img src=&gt; tagi.
Kodulehe lingi välja kuvamiseks kasuta &lt;a href=&gt; tagi.
</pre>

<?php

$data = array("name"=>"Dagne Markiine Kotkas", "address"=>"Männi 1a","image_url" => "3038.jpg","homepage" => "https://dagnemarkiinekotkas21.thkit.ee");
?>
Nimi:<b><?= $data["name"] ?></b><br>
Aadress: <i><?= $data["address"] ?></i><br>
<img src='<?= $data["image_url"] ?>' alt='<?= $data["name"] ?>' ><br>
Koduleht: <a href='<?= $data["homepage"] ?>'><?= $data["name"] ?></a><br>



</body>
</html>