<?php
	
	$random = mt_rand(0,3);
	$confidencial   = "this is information very very confidencial";
	$lenguages = ['PHP' , 'JavaScript', 'Ruby on Rails','Django con python'];
	$language = $lenguages[$random];
	$titulo = "Platzi-php";

	//lamando una funcion here
	view('home', compact('language', 'titulo'));