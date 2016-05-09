<?php

namespace Controller;

use \W\Controller\Controller;

class DefaultController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{
		if(isset($_POST['submit'])) {
			$this->redirectToRoute('merci',['nom' => $_POST['nom']]);
		}
		$this->show('default/home');
	}
	
	public function merci($nom) {
		$this->show('default/merci', ['nom' => $nom]);
	}

}