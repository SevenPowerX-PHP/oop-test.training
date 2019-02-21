<?php
	/**
	 * Created by PhpStorm.
	 * User: Lavryniuk Andrii
	 * Date: 21.02.2019
	 * Time: 13:01
	 * http://php.net/manual/ru/function.readline.php
	 */


	echo 'Hello!!!' . PHP_EOL;
	echo 'What is your name???' . PHP_EOL;
	$line = readline('Your Name: ');
	print_r("Привет " . $line . '!!!');


	//todo-splaa:  Если вам нужно добавить эту строку в историю,
	/**
	 *
	 * то сделать это вы должны самостоятельно, с помощью readline_add_history().
	 * http://php.net/manual/ru/function.readline.php
	 */

