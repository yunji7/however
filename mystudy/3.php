<?php
	/**
	 * Created by PhpStorm.
	 * User: android
	 * Date: 2015/10/5
	 * Time: 10:43
	 */


	interface more{
		function one();
		function two();
		function three();
	}

	abstract class INeedOne implements more{

		function one() {
			// TODO: Implement one() method.
		}

		function two() {
			// TODO: Implement two() method.
		}

		function three() {
			 echo 'yes';
		}
	}
	class I extends INeedOne{

	}
