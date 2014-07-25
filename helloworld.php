<?php
	
//
	require  'config.php';
	require 'helpers.php';

	$confidencial = "it is confidential";
	$language = "PHP";
	$titulo = 'MejorandoPHP';

	
	//Llamando una funcion
	view('views',compact('language','titulo'));




