
<div class="card card-body my-2 shadow-sm">
    <h3>Enregistrement d'un eleve</h3>
    <div id="error">
        <!-- Error -->
    </div>
    <form action="#" method="post" id="myForm">
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
            <button type="submit" name="register" id="btnRegistration" class="btn btn-primary">Enregistrer</button>
        </div>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
<script>
    const form = document.querySelector('#myForm'),
        error = document.querySelector('#error'),
        btnLogin = document.querySelector('#btnRegistration');

    btnLogin.onclick = (e) => {
        
        e.preventDefault();

        let xhr = new XMLHttpRequest();
        
        xhr.onload = () => {

            if(xhr.readyState === XMLHttpRequest.DONE){
                
                if(xhr.status === 200) {

                    let data = xhr.response;
                    // alert(data)
                    if(data === "success") {

                        error.innerHTML = `<p class="alert alert-success">
                            Enregistrement reussi...
                        </p>`;

                        form.reset(0);
                        Select();
                    }else{
                        error.innerHTML = `<p class="alert alert-danger">${data}</p>`
                        
                    }
                }

            }
        }

        xhr.open("POST", "./config/registration.php", true);
        
        let formData = new FormData(form);
        
        xhr.send(formData)
    }
</script>