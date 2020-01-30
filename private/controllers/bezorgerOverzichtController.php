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
        $id = $_GET['id'];
        delete($id);
        header('location: overzicht');

    }

    function edit()
    {
        include __DIR__ . '/../models/model.php';
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $bezorger = read($id);
            include __DIR__ . '/../views/edit.php';
        }
    }

    function save(){
        include __DIR__ . '/../models/model.php';
        $id =  $_POST['id'];
        $bezorger = [
            "id" => $id,
            "naam" => $_POST['naam'],
            "bedrijf" => $_POST['bedrijf'],
            "lidmaatschap" => $_POST['lidmaatschap']
        ];
        store($id, $bezorger);
        header('location: overzicht');
    }
}