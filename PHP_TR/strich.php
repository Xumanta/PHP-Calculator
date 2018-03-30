<?php
session_start();
set_include_path('./inc');
include "head.php";

if (isset($_GET["z1"]) && isset($_GET["z2"])) {
	if (is_numeric($_GET["z1"]) && is_numeric($_GET["z2"])) {
        $zahl1 = $_GET["z1"];
        $zahl2 = $_GET["z2"];
        $plus = $zahl1 + $zahl2;
        $minus = $zahl1 - $zahl2;
        $mal = $zahl1 * $zahl2;
        print "1. Zahl: ".$zahl1."<br />";
        print "2. Zahl: ".$zahl2."<!--Zahlenausgabe--><br />"; //Zahlenausgebe
        print "<br />Plus: ".$zahl1." + ".$zahl2." = ".$plus;
        print "<br />Minus: ".$zahl1." - ".$zahl2." = ".$minus;
        print "<br />Mal: ".$zahl1." x ".$zahl2." = ".$mal;
		if ($zahl2 == "0") {
		    print "<br />Geteilt und Modulo können nicht mit \"0\" berechnet werden.";
		} else {
            $geteilt = $zahl1 / $zahl2;
            $mod = $zahl1 % $zahl2;
            print "<br />Geteilt: ".$zahl1." / ".$zahl2." = ".$geteilt;
            print "<br />Modulo: ".$zahl1." mod ".$zahl2." = ".$mod;
		}
	    print <<<ENDE
	    <br /><a href="strich.php" class="button">Neue Zahlen eingeben</a>
ENDE;
	} else {
	    print <<<ENDE
	    <span style="color:red;">Deine Zahlen sind keine Zahlen! Bitte korrigiere sie!</span>
        <br /><a href="strich.php" class="button">Zahlen eingeben</a>
ENDE;
// Errormeldung falls Zahlen nicht Numerisch sind!
	}
} else {
?>
<div class="block">
Bei Punkt und Strich wird mit den Zahlen, die du hier eingibst, Plus, Minus, Mal, Geteilt und<br /> Modulo (Restberechnung) gerechnet.<br />
Gib einfach etwas ein und lass dich &uuml;berraschen!<br />
    <span style="color:red">Info: Komma (,) muss als Punkt (.) geschrieben werden!</span></div>
    <form action="strich.php" method="get" class="formular">
        <p>1. Zahl:<br><input name="z1" type="number" size="20" maxlength="255" autocomplete="off" required="required" /><br />+&nbsp;&nbsp;-&nbsp;&nbsp;x&nbsp;&nbsp;/&nbsp;&nbsp;mod:</p>
        <p>2. Zahl:<br><input name="z2" type="number" size="20" maxlength="255" autocomplete="off" required="required" /></p>
        <input type="submit" value="Rechne" class="button" />
        <input type="reset" value="Reset" class="button" />
    </form>
<?php
}
include "foot.php";
