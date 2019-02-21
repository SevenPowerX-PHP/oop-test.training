<?php
	/**
	 * Created by PhpStorm.
	 * User: Lavryniuk Andrii
	 * Date: 16.02.2019
	 * Time: 20:27
	 */

namespace Splx;

	class Run
	{
		private $container;

		/**
		 * @param mixed $container
		 */
		public function setContainer($container): void
		{
			$this->container = $container;
		}

		/**
		 * @return mixed
		 */
		public function getContainer()
		{
			return $this->container;
		}


		public function runApp()
		{
			echo 'Программа запущенна';
		}
	}