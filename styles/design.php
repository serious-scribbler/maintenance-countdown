<?php
	$f = (isset($_REQUEST['style']))? $_REQUEST['style'] : 'greyout';
	$s = (file_exists($f.".css")) ? file_get_contents($f.".css") : "body{ background-color: red;}";
	echo $s;
?>
