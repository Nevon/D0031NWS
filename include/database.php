<?php
	$db = new PDO(
		'mysql:host=localhost;dbname=tentakelmonster',
		'tentakel',
		'icakundkort'
	);
	
	$db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, 1);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
?>
