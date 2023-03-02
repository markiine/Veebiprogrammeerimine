<?php
require ("db_config.php");
global $yhendus;

if(isSet($_REQUEST["uus"]))
{
$kask=$yhendus->prepare("INSERT INTO koerad (nimi, kirjeldus) VALUES (?, ?)");
$kask->bind_param("ss", $_REQUEST["nimi"], $_REQUEST["kirjeldus"]);
$kask->execute();
header("Location: $_SERVER[PHP_SELF]");
$yhendus->close();
exit(); }
if(isSet($_REQUEST["kustutusid"]))
{
    $kask = $yhendus->prepare("DELETE FROM koerad WHERE id=?");
    $kask->bind_param("i", $_REQUEST["kustutusid"]);
    $kask->execute();
}
?>
    <!doctype html>
    <html>
    <head>
        <title>Koerad</title>
        <style type="text/css">
            #menyykiht
            {
                float: left;
                padding-right: 30px;
            }
            #sisukiht
            {
                float:left;
            }

            #list
            {
                list-style-type: none;
                padding: 0;
            }
            ul li
            {
                padding: 8px 16px;
            }

        </style>
        <meta charset="utf-8" />
    </head>
    <body>
    <div id="menyykiht">
        <h2>Koerte loetelu</h2>
        <ul> <?php
            $kask=$yhendus->prepare("SELECT id, nimi FROM koerad");
            $kask->bind_result($id, $nimi);
            $kask->execute();
            while($kask->fetch())
            {
                echo "<li><a href='?id=$id'>".
                    htmlspecialchars($nimi)."</a></li>";
            } ?>
        </ul>
        <a href='?lisamine=jah'>Lisa ...</a>
    </div>
    <div id="sisukiht">
        <?php
        if(isSet($_REQUEST["id"]))
        {
            $kask=$yhendus->prepare("SELECT id, nimi, kirjeldus, pildiaadress FROM koerad
               WHERE id=?");
            //Kysim2rgi asemele pannakse aadressiribalt tulnud id,
            //eeldatakse, et ta on tyybist integer (i).
            //(double - d, string - s)
            $kask->bind_param("i", $_REQUEST["id"]);
            $kask->bind_result($id, $nimi, $kirjeldus, $pildiaadress);
            $kask->execute();
            if($kask->fetch())
            {
                echo "<h2>".htmlspecialchars($nimi)."</h2>";

                echo "<p>".htmlspecialchars($kirjeldus)."</p>";
                echo "<img alt='".htmlspecialchars($nimi)."'src='$pildiaadress'>";
            }
            else
            {
                echo "Vigased andmed.";
            }
        }
        if(isSet($_REQUEST["lisamine"]))
        {
            ?>
            <form action='?'>
                <input type="hidden" name="uus" value="jah" />
                <h2>Uue koera lisamine</h2>
                <dl>
                    <dt>Nimi:</dt>
                    <dd>
                        <input  type="text" name="nimi" />
                    </dd>
                    <dt>Koera kirjeldus:</dt>
                    <dd>
                        <textarea rows="10" name="kirjeldus"></textarea>
                    </dd>
                </dl>
                <input type="submit" value="sisesta">
            </form>
        <?php
        }
        ?>
    </div>

    </body>
    </html>
<?php
  $yhendus->close();
?>