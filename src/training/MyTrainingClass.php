<?php
	/**
	 * Created by PhpStorm.
	 * User: Lavryniuk Andrii
	 * Date: 20.02.2019
	 * Time: 6:10
	 */

	namespace training;


	class MyTrainingClass
	{
		//Здесь находятся свойства и методы класса

		/**
		 * @var string
		 */
		public $prop1 = "I'm a class property!";

		/**
		 * MyTrainingClass constructor.
		 */
		public function __construct()
		{
			$str = '<br>'
			. PHP_EOL
			. 'Запущен класс: '
			. __CLASS__;
			echo $str;
		}

		/**
		 * @return string
		 */
		public function getProp1(): string
		{
			return $this->prop1;
		}

		/**
		 * @param string $prop1
		 * @return MyTrainingClass
		 */
		public function setProp1(string $prop1): MyTrainingClass
		{
			$this->prop1 = $prop1;
			return $this;
		}

	}