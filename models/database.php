<?php
class Database {
	private static $connection;
	public static function getConnection(){
		if(!self::$connection){
			self::$connection = new PDO("mysql:host=localhost;dbname=crnobeli","root","");
		}
		return self::$connection;
      
        
	} 
}
?>