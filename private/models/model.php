<?php
function overzicht(){
    $pdo = dbConnect();
    $sql = "SELECT * FROM `bezorgers` ORDER BY `id`";

    $info = array();
    $stmt = $pdo->query($sql) or die ('Sorry ik kan deze Query niet opvragen');

    foreach ($stmt as $row):
        $info = $row;
        echo "<tr>" .
             "<td>" . $row['naam'] . "</td>" .
             "<td>" . $row['bedrijf'] . "</td>" .
             "<td>" . $row['lidmaatschap'] . "</td>" .
             "<td>" . "<a href='delete?id=" . $row['id'] . "'>" . "Delete" . "</a>"  . "</td>" .
             "<td>" . "<a href='edit?id=" . $row['id'] . "'>" . "Edit" . "</a>" . "</td>" .
             "</tr>";
        endforeach;
}

function delete(){
    $pdo = dbConnect();
    $id = $_GET['id'];
    $sql = "DELETE FROM bezorgers WHERE id = :id";

    $stmt = $pdo->prepare($sql) or die ('Sorry ik kan deze query niet uitvoeren');
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    header('location: overzicht');
}

function edit(){
    $pdo = dbConnect();
}
?>
