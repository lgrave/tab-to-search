<?php

$result = array();

if (isset($_GET['q'])) {

	$q = $_GET['q'];

	$result = array(
		$q,
		array("$q 1", "$q 2", "$q 3");
		array("info 1", "info 2", "info 3");
		array("/index.php?q=1", "/index.php?q=2", "/index.php?q=3");
	);
}

header('Content-type: application/json');
return json_encode($result);
