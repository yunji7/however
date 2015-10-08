<?php

	/**
	 * Created by PhpStorm.
	 * User: android
	 * Date: 2015/10/8
	 * Time: 9:22
	 */


	interface visitor {
		function tome(accept $accept);
	}

	class visitorMe  implements  visitor{
		function tome(accept $accept) {
			  $accept->A1=0;
			  $accept->A2=0;
			  $accept->A3=0;
			  $accept->A4=0;
			  $accept->A5=0;
		}
	}


    class visitorOrther  implements  visitor{
		function tome(accept $accept) {
			$accept->A1=1;
			$accept->A2=2;
			$accept->A3=3;
			$accept->A4=4;
			$accept->A5=5;
		}
	}


	abstract class accept{
		public $A1;
		public $A2;
		public $A3;
		public $A4;
		public $A5;

		abstract  function visitor (visitor $visitor);
	}


	class hao  extends  accept {
		function visitor(visitor $visitor) {
		    $visitor->tome($this);
		}
	}

	class she extends accept {
		function visitor(visitor $visitor) {
			$visitor->tome($this);
		}
	}


	$hao = new hao();
	$she = new she();
	$visitorA = new visitorMe();
	$visitorB = new visitorOrther();
	$hao->visitor($visitorA);
	var_dump($hao);
	$hao->visitor($visitorB);
	var_dump($hao);

