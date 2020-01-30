<?php
    $boolean1 = true;
    $boolean2 = true;

    switch ($errors){
        case '1':
            $boolean1 = false;
            break;

        case '2':
            $boolean2 = false;
            break;

        case '12':
            $boolean1 = false;
            $boolean2 = false;
            break;
    }

    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
        $link = "https";
    } else {
        $link = "http";
    }
    $removedLetters = array('/12','/1','/2');
    $link .= "://";
    $link .= $_SERVER['HTTP_HOST'];
    $link .= str_replace($removedLetters,'',$_SERVER['REQUEST_URI']);
?>
<h2>Registeer</h2>
<form action="<?php echo $link . '/insert' ?>" method="POST">
    <div>
        <?php if(!$boolean1){echo '<p class="registeer__errors">Iemand gebruikt deze gebruikersnaam all!</p>';} ?>
        <label for="gebruikersnaam">Gebruikersnaam</label><br>
        <input type="text" name="gebruikersnaam" required>
    </div>
    <div>
        <label for="wachtwoord">Wachtwoord</label><br>
        <input type="password" name="wachtwoord" required>
    </div>
    <div>
        <?php if(!$boolean2){echo '<p class="registeer__errors">Iemand gebruikt dit emailAdress all!</p>';} ?>
        <label for="email">Email</label><br>
        <input type="email" name="email" required>
    </div>
    <input type="submit" value="Registeren">
</form>