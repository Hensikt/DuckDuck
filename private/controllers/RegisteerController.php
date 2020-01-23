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
        include __DIR__ . '/../views/registeer_page.php';
	}

    function insert(){
        include __DIR__ . '/../models/registeer.php';

	    $gebruikersnaam = $_POST['gebruikersnaam'];
	    $wachtwoord = password_hash($_POST['wachtwoord'], PASSWORD_BCRYPT);
	    $email = $_POST['email'];
	    $con = dbConnect();
	    maakAccount($con,$gebruikersnaam,$wachtwoord,$email);

        if (isset($_SERVER["HTTP_REFERER"])) {
            header("Location: " . $_SERVER["HTTP_REFERER"]);
        }
    }

}
