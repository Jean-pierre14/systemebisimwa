<?php require_once "./includes/header.php";
require_once "./configurations/db.con.php";

$sql = mysqli_query($con, "SELECT * FROM students WHERE parascolaireBoolean = ''");

$output = "";
$errors = array();

if(@mysqli_num_rows($sql) > 0){
    $output .= '<table class="table table-striped"><tbdy>';
    while($row = mysqli_fetch_array($sql)){
        $output .= '<tr>
            <td>'.$row['prenom'].' '.$row['nom'].'</td>
            <td>
                <a href="parascolaire.php?add='.$row['id'].'&?prenom="'.$row['nom'].'"" class="btn btn-sm btn-success">Add</a>
            </td>
        </tr>';
    }
    $output .= '</tbody></table>';
}else{
    $output = '<p class="alert alert-danger">Vous n\avez des donnees enregistrer dans votre systeme</p>';
}

if(isset($_GET['add'])){
    $Id = mysqli_real_escape_string($con, htmlentities(trim($_GET['add'])));
    $Slct = mysqli_query($con, "SELECT id, prenom, nom, classe FROM students WHERE id = $Id");
    $row = mysqli_fetch_array($Slct);

    $fullname = $row['prenom'] .' ' . $row['nom'];
    $sql = mysqli_query($con, "UPDATE students SET parascolaireBoolean = $Id WHERE id = $Id");
        if($sql){
            $sql1 = mysqli_query($con, "INSERT INTO parascolaire_tb(student_id, Fullname) VALUE($Id, '$fullname')");
            if($sql1){
                header("location: parascolaire.php");
            }
        }
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
                            <div class="list-group list-group-flush">
                                <a href="parascolaire.php?event=registration" class="list-group-item">Enregistrement</a>
                                <a href="parascolaire.php?event=payment" class="list-group-item">Payement</a>
                            </div>
                        </div>
                        <div class="col-8 col-md-8">
                            <?php if(isset($_GET['event'])):?>
                            <?php if($_GET['event'] == 'registration'):?>
                            <h3 class="text-center">Registration system</h3>
                            <?= $output;?>
                            <?php elseif($_GET['event'] == 'payment'):?>
                            <h3 class="text-center">
                                Payment system
                            </h3>

                            <?php endif;?>
                            <?php else:?>
                            img of the soccer
                            <?php endif;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>