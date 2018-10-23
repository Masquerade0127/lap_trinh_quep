<?php
require("Root.php");
class User extends Root{
	private $password;

	function __construct(){}

	/*get, set password*/
	function setPassword($password){
		$this->password = $password;
	}
	function getPassword(){
		return $this->password;
	}
}
?>