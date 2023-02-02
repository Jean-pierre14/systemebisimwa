<?php
require_once "./configurations/db.con.php";

$sql = mysqli_query($con, "SELECT * FROM students ORDER by id DESC LIMIT 20");
$output = '';
$searchForm = false;

if(@mysqli_num_rows($sql) > 0){
    $searchForm = true;
    while($row = mysqli_fetch_assoc($sql)){
        $output .= '<tr>
        <td>'.$row['nom'].'</td>
        <td>'.$row['prenom'].'</td>
        <td>'.$row['classe'].'</td>
        <td>'.$row['annee'].'</td>
        <td>'.$row['sex'].'</td>
        <td>
            <div class="actions btn-group">
                <a href="editStud.php?edit='.$row['id'].'" class="btn btn-sm btn-info">Modifier</a>
                <a href="editStud.php?delete='.$row['id'].'" class="btn btn-sm btn-danger">Effacer</a>
            </div>
        </td>
    </tr>';
    }
}else{
    $searchForm = false;
    $output = '<p class="alert alert-warning">Vous n\'avez pas des donnees enregistrer dans votre systeme</p>';
}

if($searchForm){
    ?>
<form action="" method="post" class="my-3">
    <input type="search" name="search" id="search" placeholder="Recherche..." class="form-control">
</form>
<?php
}
?>

<div id="result" class="table-responsive">
    <table class="table table-sm table-striped table-striped-columns">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Classe</th>
                <th>Annee scolaire</th>
                <th>Genre</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?= $output;?>
        </tbody>
    </table>
</div>