<?php

    $con = dbConnect();
    $sql = "SELECT * FROM maaltijden";
    $statement = $con->query($sql);

    function maaltijdId($con, $id) {
        $sql = "SELECT * FROM maaltijden WHERE id='$id'";
        $statement = $con->query($sql);
        return $statement;
    }

    function store($id) {

        $con = dbConnect();
        $sql = "SELECT * FROM maaltijden WHERE id='$id'";
        $statement = $con->query($sql);
        foreach ($statement as $maaltijd){
            echo "<script>
                        let array = [" . $maaltijd['id'] . ",1];
                        localStorage.setItem(" . $maaltijd['id'] . ", array);

                  </script>";
        }
        header("Location: http://localhost:8080/k_sec/DuckDuck/public/maaltijden");
    }



