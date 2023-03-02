<?php

require("db_config.php");
global $yhendus;

if(isSet($_REQUEST["uus_lend"])){
    $kask=$yhendus->prepare("INSERT INTO lend (lennu_nr, kohtade_arv, ots, siht, väljumisaeg) VALUES (?, ?, ?, ?, ?)");
    $aeg=urldecode($_REQUEST["valjumisaeg"]);
    $kask->bind_param("sisss", $_REQUEST["lennu_nr"], $_REQUEST["kohtade_arv"], $_REQUEST["ots"],$_REQUEST["siht"], $aeg);
    $kask->execute();
    header("Location: $_SERVER[PHP_SELF]?message=Lisatud!");
    $yhendus->close();
    exit();
}

include "header.php";
?>

<div class="clients">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="titlepage">
                    <h2>Lendude lisamine</h2>
                    <span></span><br>
                    <?php if (isset($_REQUEST["message"])) { ?>
                        <h3>LEND LISATUD!</h3>
                    <?php }
                        else { ?>
                    <form action="?">
                        <label>Lennu number:
                            <input type="text" name="lennu_nr" required/>
                        </label>
                        <label>Kohtade arv:
                            <input type="text" name="kohtade_arv" required/>
                        </label>
                        <label>Lennu alguspunkt:
                            <input type="text" name="ots" required/>
                        </label><label>Lennu sihtkoht:
                            <input type="text" name="siht" required/>
                        </label>
                        <label>Väljumisaeg:
                            <input type="datetime-local" name="valjumisaeg" required/>
                        </label><br>
                        <input type="submit" name="uus_lend" value="Lisa lend" required/>
                    </form> <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$yhendus->close();
include "footer.php";
?>