<div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card card-body shadow-sm">
                        <h3>Enregistrement d'un eleve</h3>
                        <form action="#" method="post">
                            <div class="form-group">
                                <label for="prenom">Prenom</label>
                                <input type="text" name="prenom" id="prenom" placeholder="Prenom" value="" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label for="nom">Nom</label>
                                <input type="text" name="nom" id="nom" placeholder="Nom" value="" class="form-control"/>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label for="classe">Classe</label>
                                    <select name="classe" id="classes" class="form-control">
                                        <option value="">-- selection --</option>
                                        <option value="P1">P1</option>
                                        <option value="P2">P2</option>
                                        <option value="P3">P3</option>
                                        <option value="P4">P4</option>
                                        <option value="P5">P5</option>
                                        <option value="P6">P6</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="annees">Annee scolaire</label>
                                    <select name="annee" id="annees" class="form-control">
                                        <option value="">-- selection --</option>
                                        <option value="2021-2022">2021-2022</option>
                                        <option value="2022-2023">2022-2023</option>
                                        <option value="2023-2024">2023-2024</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group my-2">
                                <button type="submit" class="btn btn-primary">Enregistrer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>