<?php
/*
 * Author: Julian Mahle
 * Last Edit: 30.03.2018
 * Name: info.php
 */
session_start();
set_include_path('./inc');
include "head.php";
?>
Informationen zum Web-Taschenrechner:
<ul>
    <li>Er ist vollst&auml;ndig in PHP geschrieben!</li>
    <li>Verwendet ausschlie&#223;lich nur GET Variablen (Kenner wissen, was ich meine)</li>
    <li>Der Source Code ist auf <a href="https://github.com/Xumanta/PHP-Calculator">GitHub</a>!</li>
</ul>
<?php
include "foot.php";
?>