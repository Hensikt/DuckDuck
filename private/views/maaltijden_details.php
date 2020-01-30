<?php
require __DIR__ . "/../models/maaltijd_list.php";

$con = dbConnect();
$maaltijd = maaltijdId($con, $id);

foreach ($maaltijd as $iets) {
    echo "<div class='maaltijdenDiv'>";
    echo "<h3 class='maaltijdenTitle'>" . $iets['naam'] . "</h3>";
    echo '<img class="maaltijdenImg" src="'.$iets['img'].'" alt="help" width="250" height="250">';
    echo "<br>";
    echo "<p>" . $iets['beschrijving'] . "</p>";
    echo "<p>€ " . $iets['prijs'] . "</p>";
    echo "<p>Aantal: " . $iets['hoeveelhijd'] . "</p>";
    echo "<a href='../maaltijden'>Terug naar alle maaltijden</a>";
    echo "<br>";
    echo "<a href='../maaltijden/store/" . $iets['id'] . "'>Toevoegen aan winkelwagen</a>";
    echo "</div>";
}