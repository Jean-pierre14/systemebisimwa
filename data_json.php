<?php
    header("Content-Type: application/json");

    $error = array();

    for($i = 0; $i < 10; $i++){
        array_push($error, "Number: ". $i);
    }

    // echo json_encode($error);

    foreach($error as $err){
        echo '<p>Number: '.$err.'</p>';
    }
    ?>


