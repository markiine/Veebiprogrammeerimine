<?php
require("db_config.php");
global $yhendus;

if(isSet($_REQUEST["peitmise_id"])){
    $kask=$yhendus->prepare("UPDATE laulud SET avalik=0 WHERE id=?");
    $kask->bind_param("i", $_REQUEST["peitmise_id"]);
    $kask->execute();
} ?>
    <!doctype html>
    <html lang="et">
    <head>
        <title>Laulud</title>
    </head>
    <body>
    <h1>Laulud</h1>
    <table>
        <?php
        $kask=$yhendus->prepare("SELECT id, pealkiri, avalik FROM laulud");
        $kask->bind_result($id, $pealkiri, $avalik);
        $kask->execute();
        while($kask->fetch()){
            $pealkiri=htmlspecialchars($pealkiri);
            echo "<tr>
                    <td>$pealkiri</td>
                    <td>$avalik</td>
                    <td><a href='?peitmise_id=$id'>Peida</a></td>
</tr>"; }
        ?> </table>
    </body>
    </html>
<?php
$yhendus->close();
?>