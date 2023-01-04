<div class="card card-body shadow-sm">
    <table class="table table-sm table-responsive table-striped">
        <thead>
            <tr>
                <th>Prenom</th>
                <th>Nom</th>
                <th>Classe</th>
                <th>Annee-Scolaire</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody id="response">
            <tr>
                <td>Grace</td>
                <td>Bisimwa</td>
                <td>P5</td>
                <td>2022-2023</td>
                <td>
                    <div class="btn-group">
                        <a href="students.php?edit=Id" class="btn btn-sm btn-primary">Edit</a>
                        <a href="students.php?delete=Id" class="btn btn-sm btn-danger">Delete</a>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Grace</td>
                <td>Bisimwa</td>
                <td>P5</td>
                <td>2022-2023</td>
                <td>
                    <div class="btn-group">
                        <a href="students.php?edit=Id" class="btn btn-sm btn-primary">Edit</a>
                        <a href="students.php?delete=Id" class="btn btn-sm btn-danger">Delete</a>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Grace</td>
                <td>Bisimwa</td>
                <td>P5</td>
                <td>2022-2023</td>
                <td>
                    <div class="btn-group">
                        <a href="students.php?edit=Id" class="btn btn-sm btn-primary">Edit</a>
                        <a href="students.php?delete=Id" class="btn btn-sm btn-danger">Delete</a>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Grace</td>
                <td>Bisimwa12</td>
                <td>P5</td>
                <td>2021-2023</td>
                <td>
                    <div class="btn-group">
                        <a href="students.php?edit=Id" class="btn btn-sm btn-primary">Edit</a>
                        <a href="students.php?delete=Id" class="btn btn-sm btn-danger">Delete</a>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<script>
let response = document.querySelector('#response');

function Select() {
    let output = 'chargement...';

    fetch('./config/data_json.php', {
            method: 'POST'
        })
        .then((res) => {
            return res.json()
        })
        .then(data => {
            // console.log(data);
            output = '';
            data.forEach((u) => {
                output += `
                <tr>
                    <td>${u.prenom}</td>
                    <td>${u.nom}</td>
                    <td>${u.classe}</td>
                    <td>${u.annee}</td>
                    <td>
                        <div class="btn-group">
                            <a href="eleve.php?edit=${u.id}" class="btn btn-sm btn-primary">Edit</a>
                            <a href="eleve.php?delete=${u.id}" class="btn btn-sm btn-danger">Delete</a>
                        </div>
                    </td>
                </tr>
                `
            });
            response.innerHTML = output;
        })
        .catch(err => console.log(err.message))
}
Select();
</script>