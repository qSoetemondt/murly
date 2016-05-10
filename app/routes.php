<?php
	
	$w_routes = array(
		['GET|POST', '/', 'Default#home', 'home'],
		['GET', '/[:code]', 'Default#redirection', 'redirection'],
		['GET', '/liste', 'Default#liste','liste'],
		
	);