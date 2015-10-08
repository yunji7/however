<?php
	/**
	 * Created by PhpStorm.
	 * User: android
	 * Date: 2015/10/5
	 * Time: 11:00
	 */


	class hardDisk{

		function one(){

		}
		function two(){

		}
		function more(){

		}
	}
	class cpu{
		function one(){

		}
		function two(){

		}
		function more(){

		}
	}
	class memory{
		function one(){

		}
		function two(){

		}
		function more(){

		}
	}
	class powerSource{
		function one(){

		}
		function two(){

		}
		function more(){

		}
	}
	class mainboard{
		function one(){

		}
		function two(){

		}
		function more(){

		}
	}


	class run{
		private $hardDisk;
		private $cpu;
		private $memory;
		private $powerSource;
		private $mainboard;
		function __construct(hardDisk $hardDisk,cup $cup, memory $memory, powerSource $powerSource, mainboard $mainboard) {

			$this->mainboard = $mainboard;
			$this->powerSource = $powerSource;
			//.....
		}

		function run(){
			$this->mainboard->one();
			$this->powerSource->one();
		}

	}