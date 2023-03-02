<?php
require("db_config.php");
global $yhendus;

if(isSet($_REQUEST["aja_kestvus"])){
    $kask=$yhendus->prepare("UPDATE lend SET kestvus=? WHERE id=?");
    $kask->bind_param("si", $_REQUEST["kestvus"], $_REQUEST["aja_kestvus"] );
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
                    <h2>Kestvuse sisestus</h2>
                    <span></span><br>
                    <?php if (isset($_REQUEST["message"])) { ?>
                        <h3>KESTVUS LISATUD!</h3>
                    <?php }
                    else { ?>
                            <?php }
                            $kask=$yhendus->prepare(
                                "SELECT id, lennu_nr, ots, siht, kestvus FROM lend WHERE lõpetatud=0 AND kestvus='00:00:00'");
                            $kask->bind_result($id, $lennu_nr, $ots, $siht, $kestvus);
                            $kask->execute();
                            while($kask->fetch()) {
                                $lennu_nr = htmlspecialchars($lennu_nr);
                                echo "<tr>
                                <td>Lend: $lennu_nr</td>
                                <td><br>$ots - $siht</td>
                                <td>
                                    <form action='?'>
                                       <input type='hidden' name='aja_kestvus' value='$id' />
                                       <label>Kestvus:
                                       <input type='time' name='kestvus' required/><br>
                                       <input type='submit' value='Lisa' /><br><br>
                                    </form>
                                </td>
                                </tr> "; } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
$yhendus->close();
include "footer.php";
?>
