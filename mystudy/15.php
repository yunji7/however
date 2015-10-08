<?php
	/**
	 * Created by PhpStorm.
	 * User: android
	 * Date: 2015/10/7
	 * Time: 19:01
	 */


	class command{
		function go(per $per,$message){
			$per->message();
		}
	}


	interface per{
		function message();
	}

	class person implements per{

		public  $go;
		function setgoo(IF_go $go){
			$this->go = $go;
		}

		function message() {
		   $this->goo();
		}

		function goo(){
			$this->go->goo();
		}
	}

	interface IF_go{
		function goo();
	}


	class show implements IF_go{
		function goo() {
		 echo "yes";
		}
	}


