</div>

<footer>
<?PHP

// Funktion in arbeit.

// if (isset($_GET["sp1"]) && is_numeric($_GET["sp1"])) {
	// $speicher1 =  addslashes($_GET["sp1"]);
	// $aus_sp1 = "Speicher 1: ".$speicher1."<br />";
	// print $aus_sp1;
// }
// if (isset($_GET["sp2"]) && is_numeric($_GET["sp2"])) {
	// $speicher2 =  addslashes($_GET["sp2"]);
	// $aus_sp2 = "Speicher 2: ".$speicher2."<br />";
	// print $aus_sp2;
// }
// if (isset($_GET["sp3"]) && is_numeric($_GET["sp3"])) {
	// $speicher3 =  addslashes($_GET["sp3"]);
	// $aus_sp3 = "Speicher 3: ".$speicher3."<br />";
	// print $aus_sp3;
// }
/*
Zahl1 und Zahl2 MÜSSEN vorher im Code angelegt werden.
if (isset($zahl1) && isset($zahl2)) {
	if (isset($aus_sp1)) {
	$anhang1 = "<a href=\"".$_SERVER["PHP_SELF"]."\">hgsfjdgh</a>";
		$print = $aus_sp1.$anhang;
	}
}
*/

// Arbeitet mit Cokkies
$sp0 = "";
$sp1 = "";
$sp2 = "";
$sp3 = "";
$sp4 = "";
$sp5 = "";
$sp6 = "";
$sp7 = "";
$sp8 = "";
$sp9 = "";

if (!(isset($_SESSION["Speicher"]))) $_SESSION["Speicher"] = array();

$inhalt = $_SESSION["Speicher"];
//print_r($inhalt);

function get_speicher(&$zahl) {

	$inhalt = $_SESSION["Speicher"];
	$erg = "";
	
	$count1 = 0;
	while ($count1 > $zahl) {
		$erg = $inhalt[$count1];
		$count1++;
	}	
	return $erg;
}


$mit = 1;

if (isset($ue0)) {
	$sp0 = $ue0;
} else {
	$sp0 = get_speicher($mit);
	$mit++;
}
if (isset($ue1)) {
	$sp1 = $ue1;
} else {
	$sp1 = get_speicher($mit);
	$mit++;
}
if (isset($ue2)) {
	$sp2 = $ue2;
} else {
	$sp2 = get_speicher($mit);
	$mit++;
}
if (isset($ue3)) {
	$sp3 = $ue3;
} else {
	$sp3 = get_speicher($mit);
	$mit++;
}
if (isset($ue4)) {
	$sp4 = $ue4;
} else {
	$sp4 = get_speicher($mit);
	$mit++;
}
if (isset($ue5)) {
	$sp5 = $ue5;
} else {
	$sp5 = get_speicher($mit);
	$mit++;
}
if (isset($ue6)) {
	$sp6 = $ue6;
} else {
	$sp6 = get_speicher($mit);
	$mit++;
}
if (isset($ue7)) {
	$sp7 = $ue7;
} else {
	$sp7 = get_speicher($mit);
	$mit++;
}
if (isset($ue7)) {
	$sp8 = $ue8;
} else {
	$sp8 = get_speicher($mit);
	$mit++;
}
if (isset($ue9)) {
	$sp9 = $ue9;
} else {
	$sp9 = get_speicher($mit);
	$mit++;
}
//print $mit;
// $_SESSION["Speicher"] = $sp0.$sp1.$sp2.$sp3.$sp4.$sp5.$sp6.$sp7.$sp8.$sp9;

// print $_SESSION["Speicher"];

$_SESSION["Speicher"] = array(1 => $sp0,$sp1,$sp2,$sp3,$sp4,$sp5,$sp6,$sp7,$sp8,$sp9);

$speicher = $_SESSION["Speicher"];

$count2 = 1;
while ($count2 < 11) {
	if (!($speicher[$count2] == "")) {
		
		print "<span class=\"uebertrag\">".$speicher[$count2]."</span>";
		
		if ($count2 > 2 and (($count2 % 2) == 1)) {
			print "<br />";
		}
	}
	$count2++;
}
session_write_close();
?>
<!-- <br /> -->
&copy; 2014
</footer>

</body>
</html>