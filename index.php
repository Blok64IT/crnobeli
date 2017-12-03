<?php 


require "config/config.php";
$defaultController = "site";
$defaultMethod = "index";

$controller = (isset($_GET['mvcctrl']) ? $_GET['mvcctrl'] : $defaultController) . "Controller";
                                            
$method = isset($_GET['mvcmethod']) ? $_GET['mvcmethod'] : $defaultMethod;
                                            
$controllerObject = new $controller;
$controllerObject->$method();

?>