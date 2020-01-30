<?php


class bezorgerOverzichtController
{
    function overzicht()
    {
        //Hier gaan wij de website in elkaar plakken
        //Models hier boven incuden met een variable declaratie : $variable-name = model-function()
        include __DIR__ . '/../models/model.php';

        //Header heeft de nav en pagina locatie
        include __DIR__ . '/../views/header.php';

        //Hier komt julie deel van de website plak op deze plek = '/../file.php';
        include __DIR__ . '/../views/bezorger_overzicht.php';

        //Hier komt de footer met javascripts en andere stuff
        include __DIR__ . '/../views/footer.php';
    }

    function delete()
    {
        include __DIR__ . '/../models/model.php';
        include __DIR__ . '/../views/delete.php';
    }

    function edit()
    {
        include __DIR__ . '/../models/model.php';
        include __DIR__ . '/../views/edit.php';
    }
}