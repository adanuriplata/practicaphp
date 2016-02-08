<?php 

	$lenguaje = "Programacion";

//Declarando funcion
	function view($lenguaje){
		require "view.php";
	}
	
	//llamndo una funcion
	view($lenguaje);