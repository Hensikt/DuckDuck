<?php

class BezorgerController
{
    function bezorgerpage()
    {
        //Hier gaan wij de website in elkaar plakken
        //Models hier boven incuden met een variable declaratie : $variable-name = model-function()

        //Header heeft de nav en pagina locatie
        include __DIR__ . '/../views/header.php';

        //Hier komt julie deel van de website plak op deze plek = '/../file.php';
        echo 'test';

        //Hier komt de footer met javascripts en andere stuff
        include __DIR__ . '/../views/footer.php';
    }
}
?>