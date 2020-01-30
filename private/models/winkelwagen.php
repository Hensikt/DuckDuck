<?php
require __DIR__ . "/../includes/functions.php";

$con = dbConnect();
$sql = "SELECT * FROM maaltijden";
$statement = $con->query($sql);