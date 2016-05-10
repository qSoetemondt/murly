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
		if(preg_match( '/([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/', $_POST['url'])){
			if ( stripos($_POST['url'], 'http://www.' ) == True )
				{
				    $url_longue = $_POST['url'];
				}
				else if ( preg_match( '/^www./',$_POST['url'] ) == True )
				{
					$url_longue = "http://".$_POST['url'];
				}
				else if ( stripos($_POST['url'], 'http://www.') == False && preg_match( '/^www./',$_POST['url'] ) == False )
				{
					$url_longue = "http://www.".$_POST['url'];
				}
				
			$manager = new \Manager\MiniURLManager();
			// 1 traitement et insertion
			$miniurl = $manager->MiniUrl($_POST['url']);
			$this->redirectToRoute('home');
		}else{
			echo "Url invalide! ex: http://www.google.com";
		}}elseif(isset($_POST['liste'])){
			$manager = new \Manager\MiniURLManager();
			$liste = $manager->liste();
			$this->redirectToRoute('liste');
		}
		$this->show('default/home');
	}
	
	public function Redirection($code) {
		$manager = new \Manager\MiniURLManager();
		$url = $manager->findByCode($code)['url'];
		$this->redirect($url);
	}
	
	public function liste(){
		$manager = new \Manager\MiniURLManager();
		$liste = $manager->liste();
		$this->show('default/liste', ['liste' => $liste]);
	}

}