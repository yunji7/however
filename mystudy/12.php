<?php

	/**
	 * Created by PhpStorm.
	 * User: android
	 * Date: 2015/10/7
	 * Time: 9:55
	 */
	class A {
		private $sun;

		function add(update $update) {
			$this->sun[] = $update;
		}

		function delete1() {

		}

		function update() {
			foreach ($this->sun as $key) {
				$key->getmessage();
			}

		}
	}

	interface update {
		function getmessage();
	}

	class A1 implements update {
		function getmessage() {
			// TODO: Implement getmessage() method.
		}

	}

	class A2 implements update {
		function getmessage() {
			// TODO: Implement getmessage() method.
		}

	}

	class A3 implements update {
		function getmessage() {
			// TODO: Implement getmessage() method.
		}

	}

	class Amore implements update {
		function getmessage() {
			// TODO: Implement getmessage() method.
		}

	}

