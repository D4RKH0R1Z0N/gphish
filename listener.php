<?php
	$o = fopen("php://input", "r");
	$str = stream_get_contents($o);
	fclose($o);
	$t = fopen("log.txt", "a+");
	fwrite($t, $str);
	fclose($t);
?>