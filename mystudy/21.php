<?php
	/**
	 * Created by PhpStorm.
	 * User: android
	 * Date: 2015/10/8
	 * Time: 14:45
	 */

	class test{
		private $name;
		private $sex;
		function __construct(){
			$this->aaa='aaa';
		}
	}

	$test=new test();

	$reflect=new ReflectionClass($test);
	$pro=$reflect->getDefaultProperties();
	print_r($pro);//��ӡ�����Array ( [name] => [sex] => )

	echo $test->aaa;//��ӡ�����aaa