<?php
	/**
	 * Created by PhpStorm.
	 * User: android
	 * Date: 2015/10/6
	 * Time: 11:04
	 */


	
	interface Sql{
		function add();
		function Fdelete();
		function update();
		function select();
	}

	class mysql implements Sql{
		function add() {
			// TODO: Implement add() method.
		}

		function Fdelete() {
			// TODO: Implement delect() method.
		}

		function update() {
			// TODO: Implement update() method.
		}

		function select() {
			// TODO: Implement select() method.
		}

	}
	class sqlserver implements Sql {
		function add() {
			// TODO: Implement add() method.
		}

		function  Fdelete() {
			// TODO: Implement delect() method.
		}

		function update() {
			// TODO: Implement update() method.
		}

		function select() {
			// TODO: Implement select() method.
		}

	}
	class driver{
		private $sql;

		function __construct(Sql $sql) {
			$this->sql = $sql;
		}

		function set(Sql $sql){
			$this->sql = $sql;
		}

		function add(){
			$this->sql->add();
		}
		function Fdelete(){
			$this->sql->delete();
		}
	}