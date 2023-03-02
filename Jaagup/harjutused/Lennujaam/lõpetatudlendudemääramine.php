<?php

require("db_config.php");
global $yhendus;

if(isSet($_REQUEST["lopetatud_id"])){
    $kask=$yhendus->prepare("UPDATE lend SET lõpetatud=1 WHERE id=?");
    $kask->bind_param("i", $_REQUEST["lopetatud_id"]);
    $kask->execute();
}
if(isSet($_REQUEST["lopetamata_id"])){
    $kask=$yhendus->prepare("UPDATE lend SET lõpetatud=0 WHERE id=?");
    $kask->bind_param("i", $_REQUEST["lopetamata_id"]);
    $kask->execute();
}
include "header.php";
?>

<div class="clients">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="titlepage">
                    <h2>Lennu lõpetamine</h2>
                    <span></span><br>
                        <?php
                        $kask=$yhendus->prepare("SELECT id, lennu_nr, lõpetatud FROM lend WHERE lõpetatud=1");
                        $kask->bind_result($id, $lennu_nr, $lopetatud);
                        $kask->execute();
                        while($kask->fetch()){
                            $lennu_nr=htmlspecialchars($lennu_nr);
                            $lopetamistekst="Lennus";
                            $lopetamisparam="lopetatud_id";
                            $lopetamisseisund="Lõpetatud";
                            if($lopetatud==1){
                                $lopetamistekst="Lõpeta";
                                $lopetamisparam="lopetamata_id";
                                $lopetamisseisund="Lõpetamata";
                            }
                            echo "<tr>
                    <td>Lend $lennu_nr</td><br>
                    <td>Olek: $lopetamisseisund</td><br>
                    <td>Oleku muutmine - <a href='?$lopetamisparam=$id'>$lopetamistekst</a></td><br><br>
                    </tr>"; } ?>

                </div>
            </div>
        </div>
    </div>
</div>

<?php
$yhendus->close();
include "footer.php";
?>

