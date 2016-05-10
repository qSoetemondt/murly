<?php

namespace Manager;


class MiniURLManager extends \W\Manager\Manager
{
	
	
	public function MiniUrl(){
		
		//recup. l'url la transformer puis ajout de www.murly/ avant. 
		  $url = "www.murly/";
		  $url_utilisateur = $_POST;
		  $alphanum = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z',0,1,2,3,4,5,6,7,8,9];
		  $array = [];
		  for($i=0 ; $i < 6; $i++) {
			  $nb = mt_rand(0 , 61);
			  array_push($array,$nb);
			  $array[$i] = $alphanum[$nb];			
		  }
		  $uri = implode('',$array);
		  $url_utilisateur = $url.$uri;
		  return $url_utilisateur;
		  
			
				}
		
	
	
	
	
	
	
}