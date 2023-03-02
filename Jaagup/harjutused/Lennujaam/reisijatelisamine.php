<?php
require("db_config.php");
global $yhendus;
if(isSet($_REQUEST["reisijate_id"])){
    $kask=$yhendus->prepare("UPDATE lend SET reisijate_arv=reisijate_arv+1 WHERE id=?");
    $kask->bind_param("i", $_REQUEST["reisijate_id"]);
    $kask->execute();
    header("Location: $_SERVER[PHP_SELF]");
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
                    <h2>Reisijate lisamine</h2>
                    <span></span><br>
                        <?php
                        $kask=$yhendus->prepare("SELECT id, lennu_nr, kohtade_arv, reisijate_arv FROM lend WHERE HOUR(TIMEDIFF(now(), väljumisaeg)) > 1 AND lõpetatud=1");
                        $kask->bind_result($id, $lennu_nr, $kohtade_arv, $reisijate_arv);
                        $kask->execute();
                        while($kask->fetch()){
                            $lennu_nr=htmlspecialchars($lennu_nr);
                            $output = "<tr>
                                <td>Lend $lennu_nr</td><br>
                                <td>Reisijaid $reisijate_arv</td><br>
                                <td>Kohtade arv ($kohtade_arv)</td><br>";
                            if ($kohtade_arv > $reisijate_arv) {
                                $output .= "<td><a href='?reisijate_id=$id'>Lisa reisija</a></td><br><br>";
                            }
                            $output .= "</tr><br>";
                            echo $output;

                        }

                        ?>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
$yhendus->close();
include "footer.php";
?>
