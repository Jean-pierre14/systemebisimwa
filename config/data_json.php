<?php
    header("Content-Type: application/json");
    header("Content-Type: JSON");

    require_once "./conn.php";

    $output = 'chargement...';

    $sql = mysqli_query($con, "SELECT * FROM students  WHERE annee = '2022-2023' ORDER BY id DESC");

    if(@mysqli_num_rows($sql) > 0){
        $output = '';
        $i = 0;
        while($row = mysqli_fetch_assoc($sql)){
            $response[$i]['id'] = $row['id'];
            $response[$i]['nom'] = $row['nom'];
            $response[$i]['prenom'] = $row['prenom'];
            $response[$i]['classe'] = $row['classe'];
            $response[$i]['annee'] = $row['annee'];
            $i++;
        }
        $output = json_encode($response, JSON_PRETTY_PRINT);
    }else{
        $output = 'No data';
    }
    echo $output;
?>