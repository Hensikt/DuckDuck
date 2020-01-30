<?php
$con = dbConnect();
$sql = "SELECT * FROM bezorger";
$statement = $con->query($sql);
