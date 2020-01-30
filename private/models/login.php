<?php

    function check($con, $gebruikesnaam, $wachtwoord){
        $return = false;
        $sql = 'SELECT * FROM users';
        $statement = $con->query($sql);
        foreach ($statement as $user){
            if($gebruikesnaam === $user['gebruikersnaam'] && password_verify($wachtwoord, $user['wachtwoord'])){
                $return = true;
            }
        }
        return $return;
    }

?>