<?php require_once "./includes/header.php";
require_once "./configurations/db.con.php";
if(isset($_GET['edit'])){
    $id = mysqli_real_escape_string($con, htmlentities(trim($_GET['edit'])));
    
    $sql = mysqli_query($con, "SELECT * FROM students WHERE id = $id");

    if($sql){
        $row = mysqli_fetch_array($sql);

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
        <div class="card card-body mb-3">
            <div class="d-flex justify-content-between align-items-center">
                <a href="index.php" class="btn btn-sm btn-success">Retour</a>
                <h3>Les eleves de l'annee : ....</h3>
                <span>
                    Icon
                </span>
            </div>
        </div>
        <div class="row">
            <?php if(isset($_GET['add'])):?>
            <div class=" col-md-12 mb-5">
                <a href="student.php" class="btn btn-success mb-3">Liste d'eleves</a>
                <div class="card card-body">
                    <?php require_once "./includes/formRegistration.php";?>
                </div>
            </div>
            <?php else:?>

            <div class="col-md-12 mb-5">
                <a href="student.php?add" class="btn btn-success mb-3">Inscription</a>
                <div class="card card-body">
                    <?php require_once "./includes/datas.php";?>
                </div>
            </div>
            <?php endif;?>
        </div>
    </div>

</body>

</html>