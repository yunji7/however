<?php
	/**
	 * Created by PhpStorm.
	 * User: android
	 * Date: 2015/10/8
	 * Time: 14:07
	 */



	class center{
		public $A;
		public $B;
		public $C;
		function set(abs_center $a,abs_center $b ,abs_center $c) {
			$this->A = $a;
			$this->B = $b;
			$this->C = $c;
		}


		function  sentA($age){
			$this->A->getmessage($age);
		}
		function  sentB($age){
			$this->B->getmessage($age);
		}
		function  sentC($age){
			$this->C->getmessage($age);
		}
	}

	abstract class abs_center{
		public $center;
		function __construct(center $center) {
			$this->center = $center;
		}

		function  getmessage($age){
			echo __CLASS__.$age.'<br>';
		}
	}


	class A extends  abs_center{
		function sent($age){
			$this->center->sentB($age);
			$this->center->sentC($age);
		}

	}
	class B extends  abs_center{
		function sent($age){
			$this->center->sentA($age);
			$this->center->sentC($age);
		}
	}
	class C extends  abs_center{
		function sent($age){
			$this->center->sentB($age);
			$this->center->sentA($age);
		}
	}

	$center = new center();

	$A = new A($center);
	$B = new B($center);
	$C = new C($center);


	$center->set($A,$B,$C);

	$A->sent('aaa');