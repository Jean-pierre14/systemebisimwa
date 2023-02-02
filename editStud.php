<?php require_once "./includes/header.php";
require_once "./configurations/db.con.php";
if(isset($_GET['edit'])){
    $id = mysqli_real_escape_string($con, htmlentities(trim($_GET['edit'])));
    
    $sql = mysqli_query($con, "SELECT * FROM students WHERE id = $id");

    if($sql){
        $row = mysqli_fetch_array($sql);

        $Id = $row['id'];
        $nom = $row['nom'];
        $prenom = $row['prenom'];
        $classe = $row['classe'];
        $annee = $row['annee'];
        $sex = $row['sex'];
        $pere = $row['pere'];
        $mere = $row['mere'];
    }
}

?>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">

                <div class="card card-body mb-3">
                    <div class="d-flex flex-wrap justify-content-between align-items-center">
                        <a href="student.php" class="btn btn-sm btn-success">Retour</a>
                        <h4>Modifier le compte de l'eleve.</h4>
                        <span>
                            Profil
                        </span>
                    </div>
                </div>

                <?php require_once "./includes/editStudent.php";?>

            </div>
        </div>
    </div>

</body>

</html>