<?php require_once "./includes/header.php";?>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-3 mx-1">
                <div class="card card-body shadow-sm">
                    <h3 class="text-center">Registration &copy;</h3>
                    <form action="">
                        <?php require_once "./includes/errors.php"?>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username" placeholder="Username"
                                class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="class">Class</label>
                            <select class="form-control" name="class" id="class">
                                <option value="">-- select --</option>
                                <?php for($i = 1; $i <= 6; $i++){
                                  ?>
                                <option value="P<?= $i?>">P<?= $i?></option>
                                <?php
                                }
                                ?>
                            </select>

                        </div>
                        <div class="form-group">
                            <label for="sex">Genre</label>
                            <select name="sex" id="sex" class="form-control">
                                <option value="">-- Select --</option>
                                <option value="F">Feminin</option>
                                <option value="M">Masculin</option>
                            </select>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-success btn-block">
                                Register
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-8 mx-1">
                <div class="card card-body shadow-md">
                    <div class="form-group my-3">
                        <form action="" method="post">
                            <input type="search" name="search" id="search" placeholder="Recherche..."
                                class="form-control">
                        </form>
                    </div>
                    <div id="result">
                        <table class="table table-sm table-responsive table-striped table-striped-columns">
                            <thead>
                                <tr>
                                    <th>Prenom</th>
                                    <th>Classe</th>
                                    <th>Mois</th>
                                    <th>Genre</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Grace</td>
                                    <td>P5/6</td>
                                    <td>Decembre</td>
                                    <td>Masculin</td>
                                    <td>
                                        <div class="actions btn-group">
                                            <a href="#edit" class="btn btn-sm btn-info">Modifier</a>
                                            <a href="#payer" class="btn btn-sm btn-success">Payer</a>
                                            <a href="#delete" class="btn btn-sm btn-danger">Effacer</a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>