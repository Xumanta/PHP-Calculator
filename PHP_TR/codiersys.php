<?PHP
session_start();
set_include_path('inc');
include "inc/head.php";

if (isset($_GET["dec"])) {
	
	$dec = $_GET["dec"]; // Decimalumwandlung
	
	print "<u>Dezimal</u><br />";
	
	print "Deine Zahl war: ".$dec;
	print "<br /><br />";
	print "Als Bin&auml;rzahl: ";
	print decbin($dec)."<br />";
	print "Als Hexadezimalzahl: ";
	print dechex($dec)."<br />";
	print "Als Oktalzahl: ";
	print decoct($dec)."<br />";
	
	print <<<ENDE
	<br /><a href="codiersys.php" class="button">Neue Zahlen eingeben</a>
ENDE;
} else if (isset($_GET["bin"])) {
	
	$bin = $_GET["bin"]; // Binärumwandlung
	
	print "<u>Binär</u><br />";
	
	print "Deine Zahl war: ".$bin;
	print "<br /><br />";
	print "Als Dezimalzahl: ";
	print bindec($bin)."<br />";
	$dec = bindec($bin);
	print "Als Hexadezimalzahl: ";
	print dechex($dec)."<br />";
	print "Als Oktalzahl: ";
	print decoct($dec)."<br />";
	
	print <<<ENDE
	<br /><a href="codiersys.php" class="button">Neue Zahlen eingeben</a>
ENDE;
} else if (isset($_GET["hex"])) {

	$hex = $_GET["hex"]; // Hexadecimalumwandlung
	
	print "<u>Hexadezimal</u><br />";
	
	print "Deine Zahl war: ".$hex;
	print "<br /><br />";
	print "Als Dezimalzahl: ";
	print hexdec($hex)."<br />";
	$dec = hexdec($hex);
	print "Als Bin&auml;rzahl: ";
	print decbin($dec)."<br />";
	print "Als Oktalzahl: ";
	print decoct($dec)."<br />";
	
	print <<<ENDE
	<br /><a href="codiersys.php" class="button">Neue Zahlen eingeben</a>
ENDE;
} else if (isset($_GET["oct"])) {

	$oct = $_GET["oct"]; // Oktalumwandlung
	
	print "<u>Oktal</u><br />";
	
	print "Deine Zahl war: ".$oct;
	print "<br /><br />";
	print "Als Dezimalzahl: ";
	print octdec($oct)."<br />";
	$dec = octdec($oct);
	print "Als Bin&auml;rzahl: ";
	print decbin($dec)."<br />";
	print "Als Hexadezimalzahl: ";
	print dechex($dec)."<br />";
	print <<<ENDE
	<br /><a href="codiersys.php" class="button">Neue Zahlen eingeben</a>
ENDE;
} else {
print <<<ENDE
<div class="block">
Hier werden dir Dezimal-, Hexadezimal-, Binär- oder Oktalzahlen in jeweils Dezimal-, Hexadezimal-, Binär- oder Oktalzahlen umgewandelt.<br />
Gib einfach deine Dezimal-, Hexadezimal-, Binär- oder Oktalzahl an und siehe, was passiert!<br />
<span style="color:red">Info: Komma (,) muss als Punkt (.) geschrieben werden!</span></div>
<div class="formular">
<form action="codiersys.php" method="get" class="formular2">
	<p><strong>Dezimalzahl:</strong><br /><input name="dec" type="number" size="20" maxlength="255" autocomplete="off" required="required" /></p>
	<input type="submit" value="Umwandeln" class="button" />
	<input type="reset" value="Reset" class="button" />
</form>
<br />
<form action="codiersys.php" method="get" class="formular2">
	<p><strong>Bin&auml;rzahl:</strong><br /><input name="bin" type="number" size="20" maxlength="255" autocomplete="off" required="required" /></p>
	<input type="submit" value="Umwandeln" class="button" />
	<input type="reset" value="Reset" class="button" />
</form>
<br />
<form action="codiersys.php" method="get" class="formular2">
	<p><strong>Hexadezimalzahl:</strong><br /><input name="hex" type="text" size="20" maxlength="255" autocomplete="off" required="required" /></p>
	<input type="submit" value="Umwandeln" class="button" />
	<input type="reset" value="Reset" class="button" />
</form>
<br />
<form action="codiersys.php" method="get" class="formular2">
	<p><strong>Oktalzahl:</strong><br /><input name="oct" type="number" size="20" maxlength="255" autocomplete="off" required="required" /></p>
	<input type="submit" value="Umwandeln" class="button" />
	<input type="reset" value="Reset" class="button" />
</form>
</div>
ENDE;
}

include "inc/foot.php";
?>