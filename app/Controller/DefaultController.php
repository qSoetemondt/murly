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
			$manager->insert(['url'=>$_POST['url'], 'short_url' => \W\Security\StringUtils::randomString(6), 'date_creation' => date('Y-m-D', time()), 'nb_vue'=> 0 ]);
			$this->redirectToRoute('home');
		}
		$this->show('default/home');
	}
	
	public function Redirection($code) {
		$this->redirect($url);
	}
	
	public function Liste(){
		// 2 liste
		$this->show('default/liste');
	}

}