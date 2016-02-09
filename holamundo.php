<?php 
	
	require 'config.php';
	require 'helpers.php';


	$lenguaje = "Programacion";
	$titulo = "Fabricando un Framework";
	$casa = "probando el index";
	$numero ="el numero 1";
	//llamndo una funcion

	//forma normal de mandar el array
	//view('view', ['lenguaje' => $lenguaje, 'titulo' => $titulo]);

	// formareducida de mandar el array con  la funcion compact para reducir 
	view('home', compact('lenguaje', 'titulo'));
	view('home', compact('casa', 'numero')); 