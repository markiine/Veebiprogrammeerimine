<?php
require ("db_config.php");
global $yhendus;

$kask=$yhendus->prepare("SELECT id, nimi, toon FROM kassid");
$kask->bind_result($id, $nimi, $toon);
$kask->execute();
?>
    <!doctype html>
    <html>
    <head>
        <title>Kassid</title>
    </head>
    <body>
    <h1>Kasside loetelu</h1>
    <?php
    while($kask->fetch()){
        echo "<h2 style='background: ".htmlspecialchars($toon)."'>".htmlspecialchars($nimi)."</h2>";

    }
    ?> </body>
    </html>
<?php
$yhendus->close();
?>