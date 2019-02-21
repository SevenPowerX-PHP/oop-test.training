<?php

	/**
	 * Created by PhpStorm.
	 * User: Lavryniuk Andrii
	 * Date: 20.02.2019
	 * Time: 6:32
	 */

	use training\Log;
	use training\MyTrainingClass;
	require_once __DIR__ . '/../vendor/autoload.php';

	$text = 'Text for Log';
	$file = __DIR__ . '\\..\\log\\logFile.txt\'';
	Log::logFile($text,$file);
	$file = __DIR__ . '\\..\\log\\logFile.txt\'';
	$text = 'Text for Log';
	Log::logFile($text, $file);


	$obj = new MyTrainingClass();
	var_dump($obj);
