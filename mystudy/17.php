<?php

	/**
	 * Created by PhpStorm.
	 * User: android
	 * Date: 2015/10/7
	 * Time: 19:11
	 */
	interface cup_on_off {
		function on();

		function off();

		function F_set(cup $cup);
	}

	class cup {
		private $cup;
		private $state_on;
		private $state_off;

		function __construct(cup_on_off $cup_on,cup_on_off $cup_off) {
			$this->state_off = $cup_off;
			$this->state_on = $cup_on;
			$this->cup = $cup_off;


			$cup_on->F_set($this);
			$cup_off->F_set($this);

		}

		function set_on(){
			$this->cup = $this->state_on;
		}

		function set_off(){
			$this->cup = $this->state_off;
		}

		function on() {
			$this->cup->on();
		}

		function off() {
			$this->cup->off();
		}
	}

	class state_on implements cup_on_off {
		public $cup;
		function F_set(cup $cup) {
			$this->cup = $cup;
		}


		function on() {

		}

		function off() {
			echo "¹Ø±Õ";
			$this->cup->set_off();
		}

	}

	class state_off implements cup_on_off {


		private $cup;
		function F_set(cup $cup) {
			$this->cup = $cup;
		}

		function on() {
			echo "¿ªÆô";
			$this->cup->set_on();
		}

		function off() {
			// TODO: Implement off() method.
		}

	}



	$state_on = new state_on();
	$state_of = new state_off();

	$cup = new cup($state_on,$state_of);

	$cup->on();
	$cup->off();