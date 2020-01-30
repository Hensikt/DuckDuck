<?php

class MaaltijdController
{
    function view()
    {

        //Header heeft de nav en pagina locatie
        include __DIR__ . '/../views/header.php';

        //Hier komt julie deel van de website plak op deze plek = '/../file.php';
        include __DIR__ . '/../views/maaltijden_list.php';

        //Hier komt de footer met javascripts en andere stuff
        include __DIR__ . '/../views/footer.php';
    }

    function details($id) {
        //Header heeft de nav en pagina locatie
        include __DIR__ . '/../views/header.php';

        //Hier komt julie deel van de website plak op deze plek = '/../file.php';
        include __DIR__ . '/../views/maaltijden_details.php';

        //Hier komt de footer met javascripts en andere stuff
        include __DIR__ . '/../views/footer.php';
    }

    function winkelwagen() {
        //Header heeft de nav en pagina locatie
        include __DIR__ . '/../views/header.php';

        //Hier komt julie deel van de website plak op deze plek = '/../file.php';
        include __DIR__ . '/../views/winkelwagen.php';

        //Hier komt de footer met javascripts en andere stuff
        include __DIR__ . '/../views/footer.php';
    }

    function store($id) {
        require __DIR__ . "/../models/maaltijd_list.php";
        store($id);
    }
}
?>