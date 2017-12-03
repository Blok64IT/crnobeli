<?php

class siteController extends mainController {
	public $menu_id;
	public $menu;
	public $title;
	public $articles;
    public $email_id;

	public function __construct()
	{
		/**
		 * Pravim konstruktor kako bih za svaku stranu ucitavao navigacioni meni
		 * Ako nema $this->title ne moze da ucita menu i foreach ne radi
		 */
		$this->title = Menu::getAll(); 
	}

	public function index(){ 
		
        //var_dump    ($this->title);
        
        $this->view("_template/_header");
		$this->view("index");  
		$this->view('_template/_footer');

	}
	
    
    
	public function uvod()
	{
		$this->menu_id = $_GET['id'];

		$this->menu = Menu::getById($this->menu_id);

       	$this->view("_template/_header");
		$this->view("uvod");
        $this->view('_template/_footer');
	}
       
            
public function srbija()
	{
		$this->menu_id = $_GET['id'];

		

		$this->view("_template/_header");
		$this->view("srbija");
		$this->view('_template/_footer');
	}
    
public function timovi()
	{
		$this->menu_id = $_GET['id'];

		

		$this->view("_template/_header");
		$this->view("timovi");
		$this->view('_template/_footer');
	}
  public function istorija()
	{
		$this->menu_id = $_GET['id'];


		$this->articles = Articles::getAllById($this->menu_id);

		

		$this->view("_template/_header");
		$this->view("istorija");
		$this->view('_template/_footer');
	}  
    public function kontakt()
	{
		
        
        define ('ROOT', dirname(dirname(__FILE__)));
        define ('ROOT_PATH', "http://localhost:8080/");
        define ('INCLUDES',ROOT .'www/crnobeli/models/database.php');
        
        {
		$this->view("_template/_header");
		$this->view("kontakt");
		$this->view("_template/_footer");
		
		if (isset($_POST['send_message'], $_POST['full_name'], $_POST['email'], $_POST['message'])) 
		{
			$this->fullName = $_POST['full_name'];
			$this->email 	= $_POST['email'];
			$this->message 	= $_POST['message'];

			$this->email = Email::insertEmailMessage($this->fullName, $this->email, $this->message);
            echo "<script>alert('Uspešno ste poslali vašu poruku!'); window.location='index.php?mvcctrl=site&mvcmethod=kontakt&id=6'</script>";

			
		}
	}
		
	}
        
    public function article()
	
    {
		$this->article_id = $_GET['article'];
		$this->article = Article::getById($this->article_id);
		$this->sideArticles = Article::getOtherArticles($this->article_id);
		

		$this->view('_template/_header');
		$this->view("article");
			
		
		$this->view('_template/_footer');
	}
}

?>