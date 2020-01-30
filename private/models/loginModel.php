<?php

    function check($con, $gebruikesnaam, $wachtwoord){
        $con = dbConnect();
        $gebruikersnaam = $_POST['gebruikersnaam'];
        $wachtwoord = $_POST['wachtwoord'];

        $checker = false;
        $sql = 'SELECT * FROM users';
        $statement = $con->query($sql);
        foreach ($statement as $user){
            if($gebruikesnaam === $user['gebruikersnaam'] && password_verify($wachtwoord, $user['wachtwoord'])){
                $checker = true;
            }
        }
        if (isset($_SERVER["HTTP_REFERER"])) {
            if($checker){
                echo 'gelukt';
            } else {
                header("Location: " . $_SERVER["HTTP_REFERER"]);
            }
        }
    }

?>