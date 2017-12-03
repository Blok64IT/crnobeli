<?php
class Page extends Active {
	public $page_id;
	public $title;
	public $mods;  
	public $template;
	public $menu_id;
	public static $tableName = "page";
	public static $id = "page_id"; 
}

?>