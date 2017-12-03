<?php
function __autoload($class){
	if(file_exists("models/{$class}.php")){
		require_once "models/{$class}.php";		
	}
	if(file_exists("controllers/{$class}.php")){
		require_once "controllers/{$class}.php";		
	}
}


define("BASE_ROOT", "http://" . $_SERVER['HTTP_HOST'] . str_replace($_SERVER['DOCUMENT_ROOT'], '', str_replace('\\', '/', dirname(__DIR__))));
