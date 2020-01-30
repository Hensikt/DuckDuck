<?php
    function getAccounts($con){
        $sql = "SELECT * FROM users";
        $statement = $con->query($sql);
        return $statement;
    }

    function maakAccount($con,$gebruikersnaam,$wachtwoord,$email){
        $sql = "INSERT INTO users(gebruikersnaam, wachtwoord, email) VALUES('$gebruikersnaam','$wachtwoord','$email')";
        $con->query($sql);
    }
?>