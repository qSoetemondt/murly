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
			if ( strstr($_POST['url'], 'http://www.' ) == True || strstr($_POST['url'], 'https://www.' ) == True  )
				{
				    $url_longue = $_POST['url'];
				}
				else if(strstr($_POST['url'], 'http://')== True || strstr($_POST['url'], 'https://')== True)
				{
					$url_longue = $_POST['url'];
				}
				else if ( preg_match( '/^www./',$_POST['url'] ) == True )
				{
					$url_longue = "http://".$_POST['url'];
				}
				else if ( strstr($_POST['url'], 'http://www.') == False && preg_match( '/^www./',$_POST['url'] ) == False )
				{
					$url_longue = "http://.".$_POST['url'];
				}
		if(preg_match( '/(((ftp|http|https):\/\/)|(\/)|(..\/))(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/', $url_longue)){	
			$manager = new \Manager\MiniURLManager();
			// 1 traitement et insertion
			$miniurl = $manager->MiniUrl($url_longue);
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