<?php include("./includes/header.php");?>
<?php include("./includes/navbar.php");?>
<div class="container py-3">
    <div class="row">
        <div class="col-md-3">
            <div class="list-group">
                <a href="eleve.php" class="list-group-item">Dashboard</a>
                <a href="eleve.php?event=home" class="list-group-item">Students</a>
                <a href="eleve.php?event=register" class="list-group-item">Registration</a>
            </div>
        </div>
        <div class="col-md-9">
            <?php if(isset($_GET['edit'])):?>
            <?php 
            require_once "./config/conn.php";
            $Id = $_GET['edit'];
                $sql = mysqli_query($con, "SELECT * FROM students WHERE id=$Id");
                if(mysqli_num_rows($sql) === 1){
                    $row = mysqli_fetch_array($sql);
                    $prenom = $row['prenom'];
                    $nom = $row['nom'];
                    $classes = $row['classe'];
                    $annees = $row['annee'];
                    require_once "./views/registration.php";
                }else{
                    print '<p>Sorry we can\'t help you</p>';
                }
                ?>
            <?php else:?>
            <h3>Dynamic Data</h3>
            <?php if(isset($_GET['event'])):?>
            <?php if($_GET['event'] === 'home'):?>
            <?php require_once "./views/datas.php";?>
            <?php elseif($_GET['event'] === 'register'):?>
            <?php require_once "./views/registration.php"?>
            <?php endif;?>
            <?php else:?>
            <h3>Student Dashboard</h3>
            <?php endif;?>
            <?php endif;?>
        </div>
    </div>
</div>
<?php include("./includes/footer.php");?>