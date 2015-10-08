<?php
	/**
	 * Created by PhpStorm.
	 * User: android
	 * Date: 2015/10/7
	 * Time: 18:51
	 */

	abstract class sun{
		public $sun;

		function setnext(sun $sun){
			$this->sun = $sun;
		}


		abstract function show();
	}

	class A extends sun{
		function show() {
		  echo "A";
		}
	}

	class B extends sun{
		function show() {
			echo "B";
		}
	}


	class C extends sun{
		function show() {
			echo "C";
		}
	}

	class yes {
		function show(sun $sun){
			$sun->show();

			if(isset($sun->sun)){
				$this->show($sun->sun);
			}


		}
	}

	$A = new A();
	$B = new B();
	$C = new C();

	$A->setnext($B);
	$B->setnext($C);

    $yes = new yes();

	$yes->show($A);
