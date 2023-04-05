<?php
require_once "./db.con.php";

$sql = mysqli_query($con, "SELECT * FROM  students WHERE parascolaireBoolean = ''");

if($sql){if(@mysqli_num_rows($sql) > 0){
    $output .= '<div>';
    while($row = mysqli_fetch_array($sql)){
        $output .= '<div class="card card-body p-2 my-1">
            <div class="d-flex justify-content-between align-items-center">
                <span>'.$row['nom'].'</span>
                <button type="button" class="btn btn-sm btn-info">Ajouter</button>
            </div>
        </div>';
    }
    $output .= '</div>';
}else{
    $output = '<p class="alert alert-warning">Vous n\'avez des donnees dans votre systeme</p>';
}}else{$output = '<p class="alert alert-danger>SQL code failed</p>';}

print $output;

?>