<?php
class User extends Active {
	public $user_id;
	public $useraccount;
	public $userpassword;  
	public static $tableName = "user";
	public static $id = "user_id"; 
}

?>
