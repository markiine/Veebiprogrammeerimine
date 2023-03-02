<?php
require("db_config.php");
global $yhendus;
include "header.php";
?>
<div class="clients">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="titlepage">
                    <h2>Lõpetatud lennud</h2>
                    <span></span><br>
                        <?php
                        $kask=$yhendus->prepare(
                            "SELECT id, lennu_nr, reisijate_arv, kestvus, lõpetatud FROM lend WHERE lõpetatud=0");
                        $kask->bind_result($id, $lennu_nr, $reisijate_arv, $kestvus, $lopetatud);
                        $kask->execute();
                        while($kask->fetch()){
                            $lennu_nr=htmlspecialchars($lennu_nr);
                            echo "<br><tr>
                        <td>Lend $lennu_nr</td><br>
                        <td>Reisijate arv $reisijate_arv</td><br>
                        <td>Kestvus $kestvus</td>
                        </tr><br>";
                        } ?>

                </div>
            </div>
        </div>
    </div>
</div>

<?php
$yhendus->close();
include "footer.php";
?>
