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

        <div class="col-md-12">

            <div class="my-2 card card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <a href="index.php" class="btn btn-sm btn-success">Retour</a>
                </div>
            </div>
            <div class="my-2 card card-body">
                <h2>Parascolaire</h2>
                <form action="" method="post" class="form-group my-2">
                    <input type="search" name="search" id="search" placeholder="Recherche..." class="form-control" />
                </form>
                <div id="results">
                    <h2 class="display-4 text-success">Chargement...</h2>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="./assets/js/jquery-3.4.0.min.js"></script>
<script>
$(document).ready(function() {
    fetch();
    const results = document.getElementById('results');

    function fetch() {
        $.ajax({
            url: './configurations/actions.php',
            method: "post",
            data: {
                action: "fetch"
            },
            dataType: "JSON",
            success: function(data) {

                console.log("Data " + data);

            }
        })
    }
    $(document).on("keyup", "#search", function() {
        let text = $(this).val(),
            txt = text.trim()

        if (!txt == '') {
            $.ajax({
                url: './configurations/actions.php',
                method: 'POST',
                data: {
                    txt,
                    action: 'search'
                },
                success: function(data) {
                    $('#result').html(data)
                }
            })
        }

    })
})
</script>

</html>