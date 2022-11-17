<?php include("./includes/header.php");?>
    <?php include("./includes/navbar.php");?>
    <div class="container py-3">
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
    </div>
<?php include("./includes/footer.php");?>