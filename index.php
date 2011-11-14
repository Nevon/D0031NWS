<?php
	require_once('libs/restler/restler.php');
	spl_autoload_register('spl_autoload');
	require_once('include/database.php');
	require_once('include/class.ideal.php');
	require_once('include/class.paraplyet.php');
	
	$r = new Restler();
	$r->addAPIClass('Ideal');
	$r->addAPIClass('Paraplyet');
	
	$r->handle();
?>
