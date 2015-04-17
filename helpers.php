<?php 

	//Declaracion de una funcion
	function view($template, $vars = array())
	{
		extract($vars);
		require "views/$template.tpl.php";	
	}

	function controller($name)
	{
		if (empty($name)) 
		{
			$name = 'home';
		}

		$file = "controllers/$name.php";
		
		// comprobar que esta pidiendo realmente
		// exit($file);

		if (file_exists($file))
		{
			require $file;
		}
		else
		{
			header("HTTP/1.0 404 Not Found");
			require "views/404.tpl.php";
		}
	}