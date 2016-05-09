<?php
	
	$w_routes = array(
		['GET|POST', '/', 'Default#home', 'home'],
		['GET|POST', '/merci/[:nom]', 'Default#merci', 'merci'],
		
	);