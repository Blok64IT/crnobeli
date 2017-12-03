<?php
class Email extends Active {
	public $email_id;
	public $full_name;
    public $email;
	public $message;
	public static $tableName = "Email";
	public static $id = "email_id"; 
}

?>