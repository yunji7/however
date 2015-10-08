<?php
	/**
	 * Created by PhpStorm.
	 * User: android
	 * Date: 2015/10/6
	 * Time: 11:14
	 */



	class proxy{
		private $A;

		function __construct() {
			$this->A = new A();
		}

		function show1( ){
			$this->A->show1();
		}
		function show2( ){
			$this->A->show2();
		}
	}

	 class A{

		 function __construct(proxy $proxy) {

		 }

		 function show1( ){

		 }
		 function show2( ){

		 }

	 }