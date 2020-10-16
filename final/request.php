<?php

	require_once('functions.php');

	$filename = generateRequest($_POST);
	sendRequestEmail($filename);

	echo 'Your request has been sent.';

?>