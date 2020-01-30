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

function delete($id){
    $pdo = dbConnect();
    $sql = "DELETE FROM bezorgers WHERE id = :id";

    $stmt = $pdo->prepare($sql) or die ('Sorry ik kan deze query niet uitvoeren');
    $stmt->bindValue(':id', $id);
    $stmt->execute();
}

function store($id, $data){

        $pdo = dbConnect();

        $sql = "UPDATE bezorgers 
            SET naam = :naam,
                bedrijf = :bedrijf,
                lidmaatschap = :lidmaatschap
            WHERE id = :id";
        

        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute($data);

    return $bezorger;
}

function read($id){
    $pdo = dbConnect();
    $sql = "SELECT * FROM bezorgers WHERE id = :id";
    $stmt = $pdo->prepare($sql) or die ("Sorry ik heb dit niet kunnen uitvoeren voor u");
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    $bezorger = $stmt->fetch(PDO::FETCH_ASSOC);
    return $bezorger;
}
?>
