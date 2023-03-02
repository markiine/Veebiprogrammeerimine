<?php echo 'PHP version:' .phpversion()?>
<?php

require("db_config.php");
global $yhendus;

if(isSet($_REQUEST["heaansambli_id"]) or
    isSet($_REQUEST["paremansambli_id"]) or
    isSet($_REQUEST["parimansambli_id"])) {
    $ansambli_id = $_REQUEST["heaansambli_id"]??
            $_REQUEST["paremansambli_id"]??
            $_REQUEST["parimansambli_id"];
    $lisa = isset($_REQUEST["heaansambli_id"]) ? 1 : (isset($_REQUEST["paremansambli_id"]) ? 2 : (isset($_REQUEST["parimansambli_id"]) ? 3 : 0));
    $kask=$yhendus->prepare("UPDATE ansamblid SET punktid=punktid+? WHERE id=?");
    $kask->bind_param("ii", $lisa, $ansambli_id);

    $kask->execute();
}
?>
<!doctype html>
<html lang="et">
<head>
    <title>Ansamblid</title>
</head>
<body>
<h1>Ansamblid</h1>
<table>
    <?php
    $kask=$yhendus->prepare("SELECT id, ansamblinimi, punktid FROM ansamblid");
    $kask->bind_result($id, $ansamblinimi, $punktid);
    $kask->execute();
    while($kask->fetch()){
        $ansamblinimi=htmlspecialchars($ansamblinimi);
        echo "<tr>
                    <td>$ansamblinimi</td>
                    <td>$punktid</td>
                    <td><a href='?heaansambli_id=$id'>Lisa 1 punkt</a></td>
                    <td><a href='?paremansambli_id=$id'>Lisa 2 punkti</a></td>
                    <td><a href='?parimansambli_id=$id'>Lisa 3 punkti</a></td>
</tr>"; }
    ?> </table>
</body>
</html>
<?php
$yhendus->close();
?>
