<?php
	/**
	 * Created by PhpStorm.
	 * User: android
	 * Date: 2015/10/5
	 * Time: 10:29
	 */



	interface MakeCup{
		function one();
		function two();
		function three();
	}

	class my implements MakeCup{
		function one() {
			// TODO: Implement one() method.
		}

		function two() {
			// TODO: Implement two() method.
		}

		function three() {
			// TODO: Implement three() method.
		}

	}
	class she implements MakeCup{
		function one() {
			// TODO: Implement one() method.
		}

		function two() {
			// TODO: Implement two() method.
		}

		function three() {
			// TODO: Implement three() method.
		}

	}



	class cup{

	}

	 class Buildcup {
		 private $cup;
		 function __construct(MakeCup $cup) {
			  $this->cup = $cup;
		 }

		 function NewCup(){
			 $this->cup->one();
			 $this->cup->two();
			 $this->cup->three();

			 return new cup();
		 }
	 }