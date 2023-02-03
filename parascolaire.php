<?php require_once "./includes/header.php";
require_once "./configurations/db.con.php";

$sql = mysqli_query($con, "SELECT * FROM students WHERE parascolaireBoolean = ''");

$output = "";

if(@mysqli_num_rows($sql) > 0){
    $output .= '<table class="table table-striped"><tbdy>';
    while($row = mysqli_fetch_array($sql)){
        $output .= '<tr>
            <td>'.$row['prenom'].' '.$row['nom'].'</td>
            <td>
                <a href="parascolaire.php?add='.$row['id'].'" class="btn btn-sm btn-success">Add</a>
            </td>
        </tr>';
    }
    $output .= '</tbody></table>';
}else{
    $output = '<p class="alert alert-danger">Vous n\avez des donnees enregistrer dans votre systeme</p>';
}
?>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-10">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center flex-wrap">
                            <a href="index.php" class="btn btn-sm btn-success">Retour</a>
                            <h3>Parascolaire</h3>
                            <img src="" alt="Icon" class="img-avatart-sm">
                        </div>
                    </div>
                </div>
                <div class="card mt-3 card-body">
                    <div class="row">
                        <div class="col-4 col-md-4">
                            <h3>Mois</h3>
                        </div>
                        <div class="col-8 col-md-8">
                            <?= $output;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>