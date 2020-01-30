<?php

/**
 * Class RegisteerController
 *
 * Deze handelt de logica van de homepage af
 * Haalt gegevens uit de "model" laag van de website (de gegevens)
 * Geeft de gegevens aan de "view" laag (HTML template) om weer te geven
 *
 */
class LoginController {

	function page(){
        include __DIR__ . '/../views/login_page.php';
	}

	function check(){
        include __DIR__ . '/../models/login.php';

        check();
    }

}
