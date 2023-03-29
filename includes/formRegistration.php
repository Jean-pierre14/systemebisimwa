<?php require_once "./configurations/registrationConfig.php";?>
<form action="" method="post">
    <?php require_once "./includes/errors.php"?>
    <div class="row g-2">
        <div class="col-md-6">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="prenom" value="<?= $prenom;?>" id="floatingInput"
                    placeholder="Prenom...">
                <label for="floatingInput">Prenom de l'eleve</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="nom" value="<?= $nom;?>" id="floatingInput"
                    placeholder="Nom...">
                <label for="floatingInput">Nom de l'eleve</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating">
                <select name="classe" id="floatingSelectGrid" class="form-select form-control">
                    <option value="" selected>-- Selection une classe --</option>
                    <?php for($i = 1; $i <= 6; $i++){
                                  ?>
                    <option value="P<?= $i?>">P<?= $i?></option>
                    <?php
                                }
                                ?>
                    <label for="floatingSelectGrid">Classe de l'eleve</label>
                </select>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating">
                <select class="form-select form-control" name="sex" id="floatingSelectGrid">
                    <option selected value="M">Masculin</option>
                    <option value="F">Feminin</option>
                </select>
                <label for="floatingSelectGrid">Genre de l'eleve</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating">

                <select class="form-select form-control" name="annee" id="floatingSelectGrid">
                    <option value="">
                        <?php
                        if(!empty($sex)){echo $sex;}else{echo "-- Selection l'annee scolaire --";}
                    ?>
                    </option>
                    <option value="2022-2023">2022-2023</option>
                    <option value="2023-2024">2023-2024</option>
                    <option value="2024-2025">2024-2025</option>
                    <option value="2025-2026">2025-2026</option>
                </select>
                <label for="floatingSelectGrid">Annee scolaire</label>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" value="<?= $pere;?>" name="pere" id="floatingInput"
                    placeholder="Nom du pere..." />
                <label for="floatingInput">Nom du pere</label>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-floating mb-3">
                <input type="text" value="<?= $mere;?>" class="form-control" name="mere" id="floatingInput"
                    placeholder="Nom de la mere...">
                <label for="floatingInput">Nom de la mere</label>
            </div>
        </div>

        <div class="col-md-12">
            <div class="input-group">
                <div class="input-group-text">Photo de l'enfant</div>
                <input type="file" class="form-control" name="profile" id="specificSizeInputGroupUsername"
                    value="<?= $profile;?>">
            </div>
        </div>

        <div class="form-group mt-3">
            <button type="submit" name="register" class="btn btn-success btn-block">
                Register
            </button>
        </div>
    </div>
</form>