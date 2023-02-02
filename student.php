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
            <div class="col-4">
                <div class="card card-body">
                    <?php include_once "./includes/formRegistration.php";?>
                </div>
            </div>
            <div class="col-8">
                <div class="card card-body">
                    <?php include_once "./includes/datas.php";?>
                </div>
            </div>
        </div>
    </div>

</body>

</html>