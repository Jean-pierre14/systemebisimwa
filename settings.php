<?php include("./includes/header.php");?>
    <?php include("./includes/navbar.php");?>
    <div class="container py-3">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <?php if(!isset($_GET['event'])):?>
                    <div class="card card-body shadow-sm my-2">
                    <h3>Parametres</h3>
                    <p>
                        Dans cette partie vous avez tout ce qu'il faut pour le site Bisimwa
                    </p>

                    <div class="shadow-sm my-2 p-3 d-flex justify-content-between aligns-center flex-wrap">
                        <span>Classes</span>
                        <a href="settings.php?event=classe" class="btn btn-sm btn-primary">Ajouter une classe</a>
                    </div>

                    <div class="shadow-sm my-2 p-3 d-flex justify-content-between aligns-center flex-wrap">
                        <span>Annee</span>
                        <a href="settings.php?event=annee" class="btn btn-sm btn-primary">Ajouter une annee</a>
                    </div>

                    <div class="shadow-sm my-2 p-3 d-flex justify-content-between aligns-center flex-wrap">
                        <span>Cours</span>
                        <a href="settings.php?event=cours" class="btn btn-sm btn-primary">Ajouter un cours</a>
                    </div>
                    
                </div>
                <?php else:?>
                    <h3>Event : <?= $_GET['event'];?> <a href="settings.php" class="btn btn-danger">retour</a></h3>
                <?php endif;?>
            </div>
        </div>
    </div>

<?php include("./includes/footer.php");?>

