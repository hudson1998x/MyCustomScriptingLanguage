<?php

	require_once('module/autoload.php');

	$executor = new Elcore\Executor();

	$executor->compile('src' , 'app.h9x');

	$executor->launch('app.h9x');

?>