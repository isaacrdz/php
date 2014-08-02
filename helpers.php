<?php

	//Declarando una funcion
	function view($template, $vars = array())
	{

		extract($vars);
		
		require "views/$template.tpl.php";
		
	}

	
	function controller($name)
	{

		require "controllers/$name.php";

		//header("HTTP/1.0 404 Not Found");
		//exit ("Pagina no encontrada");
	}