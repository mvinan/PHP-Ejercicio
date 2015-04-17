<?php
	//llama index.php
	if (empty ($_GET['url'])) {
		require "controllers/home.php";
	}
	//index.php?url=contactos
	elseif ($_GET['url'] == 'contactos') {
		require "controllers/contactos.php";
	}