<?php
class Menu extends Active {
	public $menu_id;
	public $title;
	public $linkref;
    public $send_message;
	public static $tableName = "menu";
    public static $key = "menu_id";
}


?>
