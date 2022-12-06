<?php include("./includes/header.php");?>
    <?php include("./includes/navbar.php");?>
    <div class="container py-3">
        <?php if(!isset($_GET['edit'])):?>
            <div class="row">
                <div class="col-md-5">
                    <?php include('./views/registration.php');?>
                </div>
                <div class="col-md-7">
                    <div class="card card-body my-2 shadow-sm">
                        <form action="#" method="post">
                            <input type="search" name="search" id="search" placeholder="Recherche..." class="form-control">
                        </form>
                    </div>
                    <?php include('./views/datas.php');?>
                </div>
            </div>
        
        <?php else:?>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card shadowm-sm card-body my-1">
                        <h3 class="text-center d-flex justify-content-between align-items-center flex-wrap">
                            <span>
                                <?= $_GET['edit'];?>
                            </span> <a href="students.php" class="btn btn-sm btn-danger">retour</a></h3>
                    </div>
                </div>
            </div>
        <?php endif;?>

    </div>
<?php include("./includes/footer.php");?>

