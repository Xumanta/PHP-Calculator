<?PHP
session_start();
set_include_path('inc');
include "inc/head.php";

if (isset($_GET["z1"]) && (isset($_GET["z2"]))) {
	if (is_numeric($_GET["z1"]) && is_numeric($_GET["z2"])) {
	$zahl1 = $_GET["z1"]; // Umdeklarierung, um es einfacher zu machen.
	$zahl2 = $_GET["z2"];
	print "x² + (".$zahl1."x) + (".$zahl2.") = 0<br />"; // Damit alles klar ist.
	$dis = (($zahl1 / 2) * ($zahl1 / 2)) - $zahl2;
		if ($dis < "0" ) {
			print "Deine Formel hat kein Nullstellen!"; // Wenn die Discriminante < 0 ist
		} else {
		print "<div style=\"line-height: 1.5;\">"; // Auch für bessere Übersicht
		$wurz = sqrt($dis);
		$erg1 = -1 * ($zahl1 / 2) + $wurz;
		$erg2 = -1 * ($zahl1 / 2) - $wurz;
		print "<br />x<sub>1,2</sub> = -(".$zahl1." / 2) &plusmn; [Wurzel: ( ".$zahl1." / 2)² - ".$zahl2." ]";
		print "<hr>"; // Dient zur besseren übersicht
		print "<br />x<sub>1</sub> = ".$erg1." (Plus Wurzel)";
		print "<br />x<sub>2</sub> = ".$erg2." (Minus Wurzel)";
		print "</div>";
		
		//Übergabe in den Foot
		$ue0 = $zahl1;
		$ue1 = $zahl2;
		$ue2 = $erg1;
		$ue3 = $erg2;
		
		}
	print <<<ENDE
	<br /><a href="pq-formel.php" class="button">Neue Zahlen eingeben</a>
ENDE;
	} else {
	print <<<ENDE
	<span style="color:red;">Deine Zahlen sind keine Zahlen! Bitte korrigiere sie!</span>
<br /><a href="pq-formel.php" class="button">Zahlen eingeben</a>
ENDE;
	}
} else {
print <<<ENDE
<div class="block" style="">
Hier bei der pq-Formel gibst du einfach die Zahlen an, und schon werden dir x<sub>1</sub> und x<sub>2</sub> berechnet<br />
<span style="color:red">Info: Komma (,) muss als Punkt (.) geschrieben werden!</span><br /><br /><br /></div>
<form action="pq-formel.php" method="get" class="formular" style="margin-top: -70px; margin-bottom: 50px;">
	<p>x²+ <b>p</b>x+ <b>q</b> = 0:
	<br />x²+<input name="z1" type="number" size="3" maxlength="255" autocomplete="off" required="required" value="1" />x+
	<input name="z2" type="number" size="3" maxlength="255" autocomplete="off" required="required" value="1" /> = 0</p>
	<input type="submit" value="Rechne" class="button" />
	<input type="reset" value="Reset" class="button" />
</form>
ENDE;
} // Formular ist mit der Block-Textausgabe immernoch am einfachsten

include "inc/foot.php";
?>