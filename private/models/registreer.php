<?php
    function getAccounts($con){
        $sql = "SELECT * FROM users";
        $statement = $con->query($sql);
        return $statement;
    }

    function maakAccount(){
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
            $sql = "INSERT INTO users(gebruikersnaam, wachtwoord, email) VALUES('$gebruikersnaam','$wachtwoord','$email')";
            $con->query($sql);
            if (isset($_SERVER["HTTP_REFERER"])) {
                header("Location: " . $_SERVER["HTTP_REFERER"]);
            }
        }

    }
?>