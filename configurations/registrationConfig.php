<?php
    require_once "./configurations/db.con.php";

    $prenom = "";
    $nom = "";
    $annee = "";
    $classe = "";
    $sex = "";
    $profile = "";
    $pere = "";
    $mere = "";

    $errors = array();

    if(isset($_POST['register'])){
        $prenom = mysqli_real_escape_string($con, htmlentities(trim($_POST['prenom'])));
        $nom = mysqli_real_escape_string($con, htmlentities(trim($_POST['nom'])));
        $classe = mysqli_real_escape_string($con, htmlentities(trim($_POST['classe'])));
        $annee = mysqli_real_escape_string($con, htmlentities(trim($_POST['annee'])));
        $pere = mysqli_real_escape_string($con, htmlentities(trim($_POST['pere'])));
        $mere = mysqli_real_escape_string($con, htmlentities(trim($_POST['mere'])));
        $sex = mysqli_real_escape_string($con, htmlentities(trim($_POST['sex'])));

        if(empty($prenom)){array_push($errors, "Empty prenom de l'eleve est trop recommander...");}
        if(empty($nom)){array_push($errors, "Le nom de l'eleve est trop recommander...");}
        if(empty($classe)){array_push($errors, "Le classe est vide...");}
        if(empty($annee)){array_push($errors, "L'annee scolaire est vide...");}
        if(empty($sex)){array_push($errors, "Le sexe de l'eleve n'est pas determiner");}
        if(empty($pere)){array_push($errors, "Le nom du pere est obligatoire");}
        if(empty($mere)){array_push($errors, "Le nom de la mere est obligatoire");}

        if(count($errors) == 0){
            
            $sql = mysqli_query($con, "INSERT INTO students(nom, prenom, classe, sex, annee, pere, mere) 
            VALUES('$nom','$prenom', '$classe', '$sex', '$annee', '$pere', '$mere')");

            if($sql){
                echo '<p class="alert alert-success">Enregistrement reussi.</p>';
            }
        }
    }

    include_once "./includes/errors.php";
?>