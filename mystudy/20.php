<?php
	/**
	 * Created by PhpStorm.
	 * User: android
	 * Date: 2015/10/8
	 * Time: 14:38
	 */


   interface IF_add{
	   function fun($A,$B);
   }


	class add implements  IF_add{
		function fun($A, $B) {
		  return $A+$B;
		}
	}
	class minus implements  IF_add{
		function fun($A, $B) {
		  return $A-$B;
		}
	}
	class XX implements  IF_add{
		function fun($A, $B) {
		  return $A*$B;
		}
	}
	class CHU implements  IF_add{
		function fun($A, $B) {
		  return $A/$B;
		}
	}

	class a{




		function sum($A,$B,$C){
			if($B == "+"){

			}

			if($B == "-"){

			}
		}
	}