<div class="container-fluid">
    <div class="row">
        <div class="col-6">
            <div class="card card-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <?php require_once "./includes/errors.php"?>
                    <div class="row g-2">
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="prenom" value="<?= $prenom;?>"
                                    id="floatingInput" placeholder="Prenom...">
                                <label for="floatingInput">Prenom de l'eleve</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="nom" value="<?= $nom;?>"
                                    id="floatingInput" placeholder="Nom...">
                                <label for="floatingInput">Nom de l'eleve</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating">
                                <select name="classe" id="floatingSelectGrid" class="form-select">
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
                                <select class="form-select" name="sex" id="floatingSelectGrid">
                                    <option selected value="M">Masculin</option>
                                    <option value="F">Feminin</option>
                                </select>
                                <label for="floatingSelectGrid">Genre de l'eleve</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating">

                                <select class="form-select" name="annee" id="floatingSelectGrid">
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
                                <input type="text" class="form-control" value="<?= $pere;?>" name="pere"
                                    id="floatingInput" placeholder="Nom du pere..." />
                                <label for="floatingInput">Nom du pere</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" value="<?= $mere;?>" class="form-control" name="mere"
                                    id="floatingInput" placeholder="Nom de la mere...">
                                <label for="floatingInput">Nom de la mere</label>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="input-group">
                                <div class="input-group-text">Photo de l'enfant</div>
                                <input type="file" class="form-control" name="profile"
                                    id="specificSizeInputGroupUsername" value="<?= $profile;?>">
                            </div>
                        </div>

                        <div class="form-group mt-3">
                            <button type="submit" name="update" class="btn btn-warning btn-block">
                                Update
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-6">
            <div class="card card-body printThis">
                <h3 class="text-center">Fiche d'enregistrement de l'eleve</h3>
                <div class="text-center">
                    <img src="" alt="Profile" class="img-avatar">
                </div>
                <ul class="mt-5 list-group list-group-flush">
                    <li class="list-group-item p-3 d-flex justify-content-between align-items-center">
                        <span>Prenom:</span>
                        <span><?= $prenom?></span>
                    </li>
                    <li class="list-group-item p-3 d-flex justify-content-between align-items-center">
                        <span>Nom:</span>
                        <span><?= $nom?></span>
                    </li>
                    <li class="list-group-item p-3 d-flex justify-content-between align-items-center">
                        <span>Classe:</span>
                        <span><?= $classe?></span>
                    </li>
                    <li class="list-group-item p-3 d-flex justify-content-between align-items-center">
                        <span>Annee scolaire:</span>
                        <span><?= $annee?></span>
                    </li>
                    <li class="list-group-item p-3 d-flex justify-content-between align-items-center">
                        <span>Nom du pere</span>
                        <span><?= $pere?></span>
                    </li>
                    <li class="list-group-item p-3 d-flex justify-content-between align-items-center">
                        <span>Nom de la mere</span>
                        <span><?= $mere?></span>
                    </li>
                </ul>

                <div class="btn-group mt-3">
                    <button class="btn btn-info">Print</button>
                    <a href="editStud.php?delete=<?= $Id;?>" class="btn btn-danger">Effacer</a>
                </div>
            </div>
        </div>
    </div>
</div>