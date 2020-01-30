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

	    $gebruikersnaam = $_POST['gebruikersnaam'];
	    $wachtwoord = password_hash($_POST['wachtwoord'], PASSWORD_BCRYPT);
	    $email = $_POST['email'];
	    $con = dbConnect();
        $boolean1 = false;
        $boolean2 = false;

        $users = getAccounts($con);
	    foreach($users as $user){
	        if($email === $user['email']){
                $boolean1 = true;
            }
            if($gebruikersnaam === $user['gebruikersnaam']){
                $boolean2 = true;
            }

        }

	    if($boolean1 == true || $boolean2 == true){
            if (isset($_SERVER["HTTP_REFERER"])) {
                $extraUrl = '';
                if($boolean1){
                    $extraUrl .= '1';
                }
                if($boolean2){
                    $extraUrl .= '2';
                }
                $removedLetters = array('/12','/1','/2');
                $link = str_replace($removedLetters,'',$_SERVER["HTTP_REFERER"]);
                header("Location: " . $link . '/' . $extraUrl);
            }
        } else {
            maakAccount($con,$gebruikersnaam,$wachtwoord,$email);
            if (isset($_SERVER["HTTP_REFERER"])) {
                header("Location: " . $_SERVER["HTTP_REFERER"]);
            }
        }
    }

}
