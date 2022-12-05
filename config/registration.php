<?php
    
    require_once("./conn.php");

    $errors = array();
    $prenom = htmlspecialchars(trim(mysqli_real_escape_string($con, $_POST['prenom'])));
    $nom = htmlspecialchars(trim(mysqli_real_escape_string($con, $_POST['nom'])));
    $classe = htmlspecialchars(trim(mysqli_real_escape_string($con, $_POST['classe'])));
    $annee = htmlspecialchars(trim(mysqli_real_escape_string($con, $_POST['annee'])));



    if(empty($prenom)){array_push($errors, "Le champs prenom est vide...");}
    if(empty($nom)){array_push($errors, "Le champs prenom est vide...");}
    if(empty($classe)){array_push($errors, "Le champs prenom est vide...");}
    if(empty($annee)){array_push($errors, "Le champs annee  est vide...");}


    if(count($errors) > 0){
        foreach($error as $errors){
            $output .= '<p>'.$error.'</p>';
        }
    }else{
        $sql = mysqli_query($con, "INSERT INTO students(nom, prenom, classe, annee) VALUES('$nom', '$prenom', '$classe', '$annee')");
    }

    print $output;


?>