<?PHP
session_start();
set_include_path('inc');
include "inc/head.php";

if (isset($_GET["z1"]) && isset($_GET["z2"])) {
	if (is_numeric($_GET["z1"]) && is_numeric($_GET["z2"])) {
		$zahl1 = $_GET["z1"];
		$zahl2 = $_GET["z2"];
	
		$erg1 = log10($zahl1);
		$erg2 = log10($zahl2);
		if($erg1 < "1") {
			$erg = "Es konnte kein Logarithmus berechnet werden!";
		} else {
			$erg = $erg2 / $erg1;
		}
		print "log".$zahl1."(".$zahl2.") = ".$erg;
		print <<<ENDE
		<br /><a href="logar.php" class="button">Neue Zahlen eingeben</a>
ENDE;
	} else {
	print <<<ENDE
	<span style="color:red;">Deine Zahlen sind keine Zahlen! Bitte korrigiere sie!</span>
	<br /><a href="logar.php" class="button">Zahlen eingeben</a>
ENDE;
	}
} else {

print <<<ENDE
<div class="block"><br />
Du kannst hier dir deinen Logarithmus rechnen lassen!<br />Er rechnet standartm&auml;ssig zur 10er-Basis, du kannst aber auch jede andere Basis angebem!<br />
<span style="color:red">Info: Komma (,) muss als Punkt (.) geschrieben werden!</span></div>
<form action="logar.php" method="get" class="formular">
	<p>log<input name="z1" type="number" size="3" value="10" maxlength="255" autocomplete="off" required="required" />(
	<input name="z2" type="number" size="3" maxlength="255" autocomplete="off" required="required" />)</p>
	<input type="submit" value="Rechne" class="button" />
	<input type="reset" value="Reset" class="button" />
</form><br /><br /><br />
ENDE;

}

include "inc/foot.php";
?>