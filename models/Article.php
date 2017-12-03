<?php
class Article extends Active {
	public $article_id;
	public $title;
	public $autor;
	public $published;
	public $content;
	public $image;
	public $main_content;
	public $main_image;
	public $page_id;
	public static $tableName = "articles";
	public static $key = "article_id"; 
}

?>