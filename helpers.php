<?php
//Declarando funcion
	function view($template, $vars = array()){
		
		extract($vars); //funcion que extrae el array

		require "views/$template.tpl.php";
	}
