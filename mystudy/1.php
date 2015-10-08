<?php
	/**
	 * Created by PhpStorm.
	 * User: android
	 * Date: 2015/10/4
	 * Time: 16:06
	 */

	 interface  IF_Factory{
		function returnThis();
     }


	class cup{
		private $money;
		function __construct(cupFactory $cupFactory) {
		   $this->money = 5;
		}
		function get(){
			return $this->money;
		}
	}
	class cupFactory implements IF_Factory{


		function returnThis() {
		    return new cup($this);
		}
	}

	$cup = new cupFactory();
	$cup = $cup->returnThis();

	echo $cup->get();
