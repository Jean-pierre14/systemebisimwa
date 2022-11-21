<?php
    
    require_once("./conn.php");

    $prenom = htmlspecialchars(trim(mysqli_real_escape_string($con, $_POST['prenom'])));
    $nom = htmlspecialchars(trim(mysqli_real_escape_string($con, $_POST['nom'])));
    $classe = htmlspecialchars(trim(mysqli_real_escape_string($con, $_POST['classe'])));
    $annee = htmlspecialchars(trim(mysqli_real_escape_string($con, $_POST['annee'])));


    if(empty($prenom) || empty($nom) || empty($classe) || empty($annee)){
        $output = 'Les champs sont vides';
    }else{
        $sql = mysqli_query($con, "INSERT INTO students(nom, prenom, classe, annee) VALUES('$nom', '$prenom', '$classe', '$annee')");
        if($sql){
            $output = 'success';
        }else{
            $output = 'error'. mysqli_error($con);
        }
    }

    print $output;


?>