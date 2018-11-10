<?php
require_once("Root.php");
class User extends Root{
	private $password;

	function __construct(){}

	/*get, set password*/
	function setPassword($password){
		$this->password = $password;
	}
	function getPassword($id){
		foreach ($this->getColumnValue($id, "user", "password") as $value) {
			return $value["password"];
		}
	}
	function logout(){
		session_destroy();
	}
}
/*$r = new User();
echo "wtf".$r->getPassword(1);*/
?>