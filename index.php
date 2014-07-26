<?php
	
	/* El controller fronted se encarga de configurar
	nuestra aplicacion
	*/
	
	require  'config.php';
	require 'helpers.php';

	//Llamar a los controladores individuales

	//index.php
	if (empty($_GET['url']))
	{
		require 'controllers/home.php';
	}
	//index.php?url=contactos
	elseif($_GET['url'] == 'contactos')
	{
		require 'controllers/contactos.php';

	}
	//index.php?url=sasasasa
	else
	{
		header("HTTP/1.0 404 Not Found");
		exit ("Pagina no encontrada");
	}
	