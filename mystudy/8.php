<?php
	/**
	 * Created by PhpStorm.
	 * User: android
	 * Date: 2015/10/5
	 * Time: 11:39
	 */


	class department{
		private $chilren;
		private $id;

		function __construct() {
			$this->id = uniqid("department",true);
		}


		function add(department $department){
			$this->chilren[$department->id] = $department;
		}

		function move(department $department){
			unset($this->chilren[$department->id]);
		}
	}

	$A = new department();
	$B = new department();
	$C = new department();

	$A->add($B);
	$A->add($C);
	var_dump($A);

	var_dump('');
	$A->move($C);


	var_dump($C);

	var_dump($A);