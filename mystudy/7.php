<?php
	/**
	 * Created by PhpStorm.
	 * User: android
	 * Date: 2015/10/5
	 * Time: 11:28
	 */



	interface IF_color{
		function setcolor();
	}

	class red implements IF_color{
		function setcolor() {

		}
	}

	class black implements IF_color{
		function setcolor() {
			// TODO: Implement setcolor() method.
		}

	}


	abstract class keyboard{

		function __construct(IF_color $IF_color) {

		}
		function set(IF_color $IF_color){

		}
	}

	class keyb extends  keyboard{

	}