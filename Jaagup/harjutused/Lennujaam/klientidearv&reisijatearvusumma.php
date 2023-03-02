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
                    <h2>Klientide arv</h2>
                    <span></span><br>
                    <?php
                    $kask = $yhendus->prepare("SELECT SUM(reisijate_arv) as sum_score FROM lend WHERE lõpetatud=0");
                    $kask->bind_result($reisijate_koguarv);
                    $kask->execute();
                    $kask->fetch();
                    echo "Meiega reisinud klientide arv: $reisijate_koguarv"?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include "footer.php";
?>
