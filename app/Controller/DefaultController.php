<?php

namespace Controller;
//use \Manager\MiniURLManager;

class DefaultController extends \W\Controller\Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{
		if(isset($_POST['submit'])) {
			$manager = new \Manager\MiniURLManager();
			// 1 traitement et insertion
			$miniurl = $manager->MiniUrl($_POST['url']);
			$this->redirectToRoute('home');
		}elseif(isset($_POST['liste'])){
			$manager = new \Manager\MiniURLManager();
			$liste = $manager->liste();
			$this->redirectToRoute('liste');
		}
		$this->show('default/home');
	}
	
	public function Redirection($code) {
		$this->redirect($url);
	}
	
	public function liste(){
		$manager = new \Manager\MiniURLManager();
		$liste = $manager->liste();
		$this->show('default/liste', ['liste' => $liste]);
	}

}