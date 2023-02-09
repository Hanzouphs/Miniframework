<?php 

 namespace App\Controllers;

//Recursos do Minifrawork
 use  MF\Controller\Action;
 use MF\Model\Container;


class IndexController extends Action {		

	 	public function index() {


	 		$this->render('index');

	 }
	 	
	 	
 }


?>