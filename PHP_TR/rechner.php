<?php
/*
 * Author: Julian Mahle
 * Last Edit: 30.03.2018
 * Name: rechner.php
 */
session_start();
set_include_path('./inc');
include "head.php";
?>
<p>Herzlich Willkommen bei dem Web-Taschenrechner, der f&uuml;r dich:<br />
    <ul>
        <li>Strichtrechnet,</li>
        <li>Punktrechnet,</li>
        <li>Modulo rechnet,</li>
        <li>Hochzahlen rechnet,</li>
        <li>Logarithmen rechnet,</li>
        <li>Wurzeln zieht,</li>
        <li>Codiersysteme codiert,</li>
        <li>pq-Formel rechnet,</li>
        <li>weiteres ist in Arbeit!</li>
    </ul>
</p>
<?php
include "foot.php";
?>