<?php

	//Declarando una funcion
	function view($template, $vars = array())
	{

		extract($vars);
		
		require "views/$template.tpl.php";
		
	}