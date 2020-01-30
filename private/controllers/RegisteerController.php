<?php

/**
 * Class RegisteerController
 *
 * Deze handelt de logica van de homepage af
 * Haalt gegevens uit de "model" laag van de website (de gegevens)
 * Geeft de gegevens aan de "view" laag (HTML template) om weer te geven
 *
 */
class RegisteerController {

	function page(){
	    $errors = '';
        include __DIR__ . '/../views/registeer_page.php';
	}

	function errorspage($errors){
        include __DIR__ . '/../views/registeer_page.php';
    }

    function insert(){
        include __DIR__ . '/../models/registreer.php';

        maakAccount();
    }

}
