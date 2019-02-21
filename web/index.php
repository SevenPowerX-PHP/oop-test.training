<?php
	/**
	 * Created by PhpStorm.
	 * User: Lavryniuk Andrii
	 * Date: 16.02.2019
	 * Time: 20:26
	 */


	use Splx\Run;
	use training\MyTrainingClass;

	require_once __DIR__ . '/../vendor/autoload.php';

	$log = new Monolog\Logger('name');
	$log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));
	$log->addWarning('Foo');
//	$log->info('This is a log! ^_^ ');
//	$log->warning('This is a log warning! ^_^ ');
//	$log->error('This is a log error! ^_^ ');
	$log->

	$app = new Run();
	$app->runApp();
	$training = new MyTrainingClass();
	var_dump($training);
