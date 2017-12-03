<?php
abstract class baseController { 
    
	public function view($view, array $data = []){
		if(!file_exists("views/{$view}.php")){
			$izuzetak = new Exception("stranica ne postoji"); 
			throw $izuzetak;
		}
        
		include "views/{$view}.php";
	} 
	abstract function index();
    
   
}
    

?>