<div id="registrationList">



</div>

<script>
let resultats = document.getElementById('registrationList');
resultats.innerHTML = `
<ul class="list-group list-group-flush">
    <li class="list-group-item py-4 d-flex justify-content-between align-items-center list-group-item-action">
        Chargement...
        <span class="btn-group">
            <button class="btn btn-sm btn-warning" type="" id="">Action</button>
        </span>
    </li>
</ul>
`;

let xhr = new XMLHttpRequest();

let output = '';

xhr.open('POST', './config/UI/registration/studentParascolaire.php', true);

xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
            let data = xhr.response;
            resultats.innerHTML = data;
        }
    }
}

xhr.send()
console.log("Cool")
</script>