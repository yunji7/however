<?php
	/**
	 * Created by PhpStorm.
	 * User: android
	 * Date: 2015/10/5
	 * Time: 10:49
	 */


	class my{
		function show(){
			echo "my";
		}
	}

	class addOne{
		private $my;
		function __construct() {
			$this->my = new my();
		}


		function addMore(){
			echo "start";
			$this->my->show();
			echo "end";
		}
	}

