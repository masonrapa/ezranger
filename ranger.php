<?php
$ghost = $_POST["input"];
if (strpos($ghost, '.*') !== false) {
	echo "These operation will take 1-2 Mins, Keep calm";
	$porto = $_POST["porto"];
	$ghost = str_replace(".*", ".", $ghost);
	$ranges = range(1,255);
	foreach ($ranges as $sub){
		$host = $ghost."".$sub;
		$connection = @fsockopen($host, $porto, $errno, $errstr, 2);
		if (is_resource($connection)){
			echo "<h4>✅ [!]  ".$host.":".$porto." [HOST] OPPENED   [!]</h4>"."\n";
			fclose($connection);
		} else {
			$null = null;
		}
	}
} else {
	echo "<br>This is not a range... a range is like '127.0.0.*'<br>";
}
?>
