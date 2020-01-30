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
    if (isset($_POST['submit'])) {
        $pdo = dbConnect();
        $bezorger = [
            "id" => $_GET['id'],
            "naam" => $_POST['naam'],
            "bedrijf" => $_POST['bedrijf'],
            "lidmaatschap" => $_POST['lidmaatschap']
        ];

        $sql = "UPDATE bezorgers 
            SET naam = :naam,
                bedrijf = :bedrijf,
                lidmaatschap = :lidmaatschap
            WHERE id = :id";

        $id = $_GET['id'];
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute($bezorger);
    }
    if (isset($_GET['id'])) {
        $pdo = dbConnect();
        $id = $_GET['id'];

        $sql = "SELECT * FROM bezorgers WHERE id = :id";
        $stmt = $pdo->prepare($sql) or die ("Sorry ik heb dit niet kunnen uitvoeren voor u");
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        $bezorger = $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>
