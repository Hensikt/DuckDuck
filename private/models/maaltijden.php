<?php
require __DIR__ . "/../includes/functions.php";

$search = $_GET['q'];

$con = dbConnect();
$sql = "SELECT * FROM maaltijden WHERE naam LIKE '%$search%'";
$statement = $con->query($sql);

foreach ($statement as $iets) {

    echo "<hr>";
    echo "<div class='maaltijdenDiv'>";
    echo "<h3 class='maaltijdenTitle'>" . $iets['naam'] . "</h3>";
    echo '<img class="maaltijdenImg" src="'.$iets['img'].'" alt="help" width="250" height="250">';
    echo "<br>";
    echo "<p>€" . $iets['prijs'] . "</p>";
    echo "<a href='maaltijden/" . $iets['id'] . "'>Details</a>";
    echo "</div>";
}
