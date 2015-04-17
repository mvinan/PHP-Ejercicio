<?php 

	/*	Estes controlador frontend
	 *	es el que se encargara de configurar nuestra aplicacion
	 */
	require 'config.php';
	require 'helpers.php';

	//llamar al controlador indicado
	
	/*
	 * Codigo inicial antes de colocar el .htaccess que llama a
	 * la url en la condicion if si la URL se encuentra vacia
	 * agrega mediante GET el valor home.
	 * 
	 * .htaccess simplifica todo eso y reduce la direccion en simplemente el nombre
	 * ejemplo : localhost:5757/contacto
	 * 
	 *if (empty($_GET['url'])) 
	 *{
	 *	$_GET['url'] = 'home';
	 *}
	*/

	controller( $_GET['url'] );

	// var_dump($_GET);