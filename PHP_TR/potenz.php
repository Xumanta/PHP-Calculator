<?PHP
session_start();
set_include_path('inc');
include "inc/head.php";

if (isset($_GET["z1"]) && isset($_GET["z2"])) {
	if (is_numeric($_GET["z1"]) && is_numeric($_GET["z2"])) {
	$zahl1 = $_GET["z1"];
	$zahl2 = $_GET["z2"];
	
	$erg = pow($zahl1,$zahl2);
	print $zahl1." hoch ".$zahl2." = ".$erg;
	
	print <<<ENDE
	<br /><a href="potenz.php" class="button">Neue Zahlen eingeben</a>
ENDE;
	} else {
	print <<<ENDE
	<span style="color:red;">Deine Zahlen sind keine Zahlen! Bitte korrigiere sie!</span>
<br /><a href="potenz.php" class="button">Zahlen eingeben</a>
ENDE;
	}
} else {
print <<<ENDE
<div class="block" style="margin-top: 30px;">
Hier werden dir Potenzen/Hochzahlen berechnet. Gib deine Basis und die Zahl an, wie oft sie sich selbst multiplieziren soll und drücke auf "Rechne"<br />
<span style="color:red">Info: Komma (,) muss als Punkt (.) geschrieben werden!</span></div>
<form action="potenz.php" method="get" class="formular">
	<p><input name="z1" type="number" size="5" maxlength="255" autocomplete="off" required="required" /> hoch
	<input name="z2" type="number" size="5" maxlength="255" autocomplete="off" required="required" /></p>
	<input type="submit" value="Rechne" class="button" />
	<input type="reset" value="Reset" class="button" />
</form>
<div style="margin-top: 60px;"><!-- Dient nur als Platzhalter --></div>
ENDE;
}

include "inc/foot.php";
?>