<?php
    function maakAccount($con,$gebruikersnaam,$wachtwoord,$email){
        $sql = "INSERT INTO users VALUES('','$gebruikersnaam','$wachtwoord','$email')";
        $con->query($sql);
    }
?>