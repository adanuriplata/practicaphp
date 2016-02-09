<?php 
	
	require 'config.php';
	require 'helpers.php';


	$lenguaje = "Programacion";
	$titulo = "Fabricando un Framework";
	//llamndo una funcion

	//forma normal de mandar el array
	//view('view', ['lenguaje' => $lenguaje, 'titulo' => $titulo]);

	// formareducida de mandar el array con  la funcion compact para reducir 
	view('view', compact('lenguaje', 'titulo'));

