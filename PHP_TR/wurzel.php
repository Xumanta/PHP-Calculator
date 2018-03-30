<?php
session_start();
set_include_path('./inc');
include "head.php";

if (isset($_GET["z1"])) {
	if (is_numeric($_GET["z1"])) {
	$zahl1 = $_GET["z1"];
	print "[Wurzel: ".$zahl1."]";
		if ($zahl1 < "0") {
		    print " --> Error!<br />Es ist nicht möglich, von negativen Zahlen die Wurzel zu ziehen!";
		} else {
            $wur = sqrt($zahl1);
            print " = ".$wur;
		}
	print <<<ENDE
	<br /><br /><a href="wurzel.php" class="button">Neue Zahlen eingeben</a>
ENDE;
	} else {
	print <<<ENDE
	<span style="color:red;">Deine Zahlen sind keine Zahlen! Bitte korrigiere sie!</span>
	<br /><a href="wurzel.php" class="button">Zahlen eingeben</a>
ENDE;
	}
} else {

?>
    <div class="block">
    Gib deine Zahl an und lass dich bewurzeln!<br />
    <span style="color:red">Info: Komma (,) muss als Punkt (.) geschrieben werden!</span></div>
    <form action="wurzel.php" method="get" class="formular" style="margin-top: 0">
        <p>[Wurzel: <input name="z1" type="number" size="7" maxlength="255" autocomplete="off" required="required" /> ]<br />
        <input type="submit" value="Rechne" class="button" />
        <input type="reset" value="Reset" class="button" />
    </form>
<?php
}

include "foot.php";
