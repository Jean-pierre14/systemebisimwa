<?php include("./includes/header.php");?>

<?php include("./includes/navbar.php");?>

<div class="container py-3">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <?php if(!isset($_GET['event'])):?>

            <div class="card card-body my-2 shadow-md">

                <div class="my-2 d-flex justify-content-between align-items-center flex-wrap">
                    <div>
                        <h4>Les donnees</h4>
                    </div>
                    <div>
                        <a href="parascolaire.php?event" class="btn btn-success btn-sm">Enregistrement d'un noveau</a>
                    </div>
                </div>

                <form action="" method="post" class="myData">
                    <div class="d-flex justify-content-between align-items-center">
                        <span>

                            <input type="search" name="search" id="search" placeholder="Rechercher..."
                                class="form-control">

                        </span>
                        <span>
                            <select name="mois" onchange="mySelect()" class="form-control" id="mois">
                                <?php for($n = 1; $n <= 12; $n++):?>
                                <?php if(intval(date('m')) === $n):?>
                                <option value="<?= $n;?>" selected>Mois: <?= $n;?></option>
                                <?php else:?>
                                <option value="<?= $n?>"><?= $n?></option>
                                <?php endif;?>
                                <?php endfor;?>
                            </select>
                        </span>
                    </div>
                </form>

                <?php require_once "./includes/components/parascolaire/data.php";?>
            </div>

            <?php else:?>
            <div class="card card-body my-2 shadow-md">
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <h3>Registration</h3>
                    <a href="parascolaire.php" class="btn btn-success btn-sm">Retour</a>
                </div>

                <form action="" method="post" class="mb-3" id="mySearch">
                    <input type="hidden" name="action" id="action" value="searchone" class="form-control" />
                    <input type="search" name="text" id="search" placeholder="Rechercher..." class="form-control" />
                </form>
                <!-- API of Student list -->
                <?php require_once "./includes/components/parascolaire/registration.php"?>
            </div>
            <?php endif;?>
        </div>
    </div>
</div>

<?php include("./includes/footer.php");?>

<script src="./assets//js/jquery.min.js"></script>

<script>
$(document).ready(function() {

    $(document).on('click', '.event-add', function() {

        let id = $(this).attr('id')
        let fullname = $(this).data('fullname');

        // console.log(fullname);
        $.ajax({
            method: 'POST',
            url: './includes/components/parascolaire/search.php',
            data: {
                action: 'addPara',
                id,
            },
            success: function(data) {
                if (data === 'success') {
                    SelectAll();
                    // console.log(data)
                }
                console.log(data)
            }
        })
    })

});
</script>