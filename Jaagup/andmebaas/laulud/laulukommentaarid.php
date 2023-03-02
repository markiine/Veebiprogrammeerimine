<?php
require("db_config.php");
global $yhendus;

if(isSet($_REQUEST["uue_kommentaari_id"])){
    $kask=$yhendus->prepare(
        "UPDATE laulud SET kommentaarid=CONCAT(kommentaarid, ?)  WHERE id=?");
    $kommentaarilisa="\n".$_REQUEST["uus_kommentaar"]."\n";
    $kask->bind_param("si", $kommentaarilisa,
        $_REQUEST["uue_kommentaari_id"]);
    $kask->execute();
}
?>
    <!doctype html>
    <html lang="et">
    <head>
        <title>Laulud</title>
        <style>
            table, tr, td {
                border: 1px solid black;
            }
            td {
                padding: 0 5px
            }
        </style>
    </head>
    <body>
    <h1>Laulud</h1>
    <table>
<?php
$kask=$yhendus->prepare(
    "SELECT id, pealkiri, kommentaarid FROM laulud");
$kask->bind_result($id, $pealkiri, $kommentaarid);
$kask->execute();
while($kask->fetch()){
    $pealkiri=htmlspecialchars($pealkiri);
    $kommentaarid=nl2br(htmlspecialchars($kommentaarid));
    echo "<tr>
                    <td>$pealkiri</td>
                    <td>$kommentaarid</td>
                    <td>
                      <form action='?'>
                           <input type='hidden' name='uue_kommentaari_id' value='$id' />
                           <input type='text' name='uus_kommentaar' />
                           <input type='submit' value='Lisa kommentaar' />
                        </form>
                    </td>
                  </tr>";
} ?>
    </table>
    </body>
</html>
<?php
$yhendus->close();
?>

