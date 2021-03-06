<?php
	/**
	 * Created by PhpStorm.
	 * User: Lavryniuk Andrii
	 * Date: 21.02.2019
	 * Time: 6:13
	 */

	namespace training;


	use Psr\Log\LoggerInterface;

	class Log implements LoggerInterface
	{
		/**
		 * @param $textLog
		 * @param $file
		 * http://php.net/manual/ru/function.fopen.php
		 */
		public static function logFile($textLog,$file)
		{
			$text = '==========================\n';
			$text .= print_r($textLog);
			$text .= '\n' . date('Y-m-d H:i:s') . '\n';
			$fOpen = fopen($file, 'a');
			fwrite($fOpen, $text);
			fclose($fOpen);
		}

		/**
		 * System is unusable.
		 *
		 * @param string $message
		 * @param array $context
		 *
		 * @return void
		 */
		public function emergency($message, array $context = array())
		{
			// TODO: Implement emergency() method.
		}

		/**
		 * Action must be taken immediately.
		 *
		 * Example: Entire website down, database unavailable, etc. This should
		 * trigger the SMS alerts and wake you up.
		 *
		 * @param string $message
		 * @param array $context
		 *
		 * @return void
		 */
		public function alert($message, array $context = array())
		{
			// TODO: Implement alert() method.
		}

		/**
		 * Critical conditions.
		 *
		 * Example: Application component unavailable, unexpected exception.
		 *
		 * @param string $message
		 * @param array $context
		 *
		 * @return void
		 */
		public function critical($message, array $context = array())
		{
			// TODO: Implement critical() method.
		}

		/**
		 * Runtime errors that do not require immediate action but should typically
		 * be logged and monitored.
		 *
		 * @param string $message
		 * @param array $context
		 *
		 * @return void
		 */
		public function error($message, array $context = array())
		{
			// TODO: Implement error() method.
		}

		/**
		 * Exceptional occurrences that are not errors.
		 *
		 * Example: Use of deprecated APIs, poor use of an API, undesirable things
		 * that are not necessarily wrong.
		 *
		 * @param string $message
		 * @param array $context
		 *
		 * @return void
		 */
		public function warning($message, array $context = array())
		{
			// TODO: Implement warning() method.
		}

		/**
		 * Normal but significant events.
		 *
		 * @param string $message
		 * @param array $context
		 *
		 * @return void
		 */
		public function notice($message, array $context = array())
		{
			// TODO: Implement notice() method.
		}

		/**
		 * Interesting events.
		 *
		 * Example: User logs in, SQL logs.
		 *
		 * @param string $message
		 * @param array $context
		 *
		 * @return void
		 */
		public function info($message, array $context = array())
		{
			// TODO: Implement info() method.
		}

		/**
		 * Detailed debug information.
		 *
		 * @param string $message
		 * @param array $context
		 *
		 * @return void
		 */
		public function debug($message, array $context = array())
		{
			// TODO: Implement debug() method.
		}

		/**
		 * Logs with an arbitrary level.
		 *
		 * @param mixed $level
		 * @param string $message
		 * @param array $context
		 *
		 * @return void
		 */
		public function log($level, $message, array $context = array())
		{
			// TODO: Implement log() method.
		}
	}