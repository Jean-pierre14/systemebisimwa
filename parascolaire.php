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

                <div class="d-flex justify-content-between align-items-center">
                    <span>
                        <form action="" method="post">
                            <input type="search" name="search" id="search" placeholder="Rechercher..."
                                class="form-control">
                        </form>
                    </span>
                    <span>
                        <select name="mois" class="form-control" id="mois">
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

                <div class="my-3">
                    <div id="results" class="d-block">
                        <div class="">
                            <ul class="list-group list-group-flush">
                                <li
                                    class="list-group-item py-3 d-flex justify-content-between align-items-center list-group-item-action">
                                    First item
                                    <span class="btn-group">
                                        <button class="btn btn-sm btn-warning" type="button" id="non">Non</button>
                                        <button class="btn btn-sm btn-primary" type="button" id="oui">Oui</button>
                                        <button class="btn btn-sm btn-danger" type="button" id="oui">Effacer</button>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
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

        console.log(fullname)

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