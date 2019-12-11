<?php
ini_set("display_errors",1);error_reporting(-1);
include_once("core/EquationInterface.php");
include_once("core/LogInterface.php");
include_once("core/LogAbstract.php");
include_once("Korusha/KorushaException.php");
include_once("Korusha/Linear.php");
include_once("Korusha/Log.php");
include_once("Korusha/Square.php");
$co_arr = [];
foreach(["a", "b", "c"] as $co) {
	$co_arr[$co] = readline("Enter ".$co.": ")?:0;
}
$a = $co_arr["a"];
$b = $co_arr["b"];
$c = $co_arr["c"];
//Korusha\Log::log("Entered numbers: " . implode(", ", $co_arr));

if ($file = fopen("version", "r"))
	Korusha\Log::log("Version: " . fread($file, 100));
Korusha\Log::log("Equation: $a*x^2 + $b*x + $c = 0");
try {
	$solver = new Korusha\Square($a, $b, $c);
	
	Korusha\Log::log("Roots: " . implode(", ", $solver->solve($a, $b, $c)));
	
}catch(Korusha\KorushaException $ex) {
	Korusha\Log::log($ex->getMessage());
} 
Korusha\Log::write();
?>
