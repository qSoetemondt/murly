<?php
	
	$w_routes = array(
		['GET|POST', '/', 'Default#home', 'home'],
		['GET', '/liste', 'Default#liste','liste'],
		['GET', '/[:code]', 'Default#redirection', 'redirection'],
		
		
	);