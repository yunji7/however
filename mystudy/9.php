<?php
	/**
	 * Created by PhpStorm.
	 * User: android
	 * Date: 2015/10/6
	 * Time: 9:45
	 */



	class factory{

		private  $A;
		private  $B;

		function getA(){
			if(isset($this->A)){
				return $this->A;
			}
			return new A($this);
		}

		function getB(){
			if(isset($this->B)){
				return $this->B;
			}
			return new B($this);
		}
	}

	 class A{
		 function __construct(factory $factory) {

		 }

		 function show(){
			 echo "a";
		 }
	 }


	 class B{
		 function __construct(factory $factory) {

		 }

		 function show(){
			 echo "b";
		 }
	 }

	 $A = new factory();
	$A1 = $A->getA();
	$B1 = $A->getB();

	$A1->show();
	$B1->show();