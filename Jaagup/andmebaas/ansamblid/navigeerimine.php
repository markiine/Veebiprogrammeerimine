<?php
function isActive($name) : string
{
    return basename($_SERVER['PHP_SELF'])==$name ? "active":"";
}
?>

<nav>
    <ul>
        <li><a href="index.php">Avaleht</a></li>
        <li><a href="ansamblipunktid.php">Punktid</a></li>
        <li><a href="ansambliteavaminejapeitmine.php">Lisamine ja Peitmine</a></li>
        <li><a href="ansamblikommentaarid.php">Kommenteerimine</a></li>
    </ul>
</nav>