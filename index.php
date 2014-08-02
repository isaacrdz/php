<?php
	
	/* El controller fronted se encarga de configurar
	nuestra aplicacion
	*/
	
	require 'config.php';
	require 'helpers.php';

	//Llamar a los controladores indicado

	if (empty($_GET['url']))
	{
		$_GET['url'] = 'home';
	}

controller($_GET['url']);

	