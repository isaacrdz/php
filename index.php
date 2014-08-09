<?php
	
	/* El controller fronted se encarga de configurar
	nuestra aplicacion
	*/
	
	require 'config.php';
	require 'helpers.php';


	//Library
	require 'library/Request.php';
	require 'library/Inflector.php';

	
	//Llamar a los controladores indicado

	
	if (empty ($_GET['url']))
	{
		$url = "";
	}
	else
	{
		$url = $_GET['url'];
	}

	$request = new Request($url);
	$request->execute();