<div id="registrationList">



</div>

<script>
let resultats = document.getElementById('registrationList'),
    search = document.getElementById('search'),
    myForm = document.getElementById('mySearch');

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

const SelectAll = () => {
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
}

SelectAll();
search.onkeyup = () => {
    const txt = search.value;
    const text = txt.trim();

    if (text !== '') {
        resultats.innerHTML = 'Chargement...'
        let xhr = new XMLHttpRequest();
        xhr.open('POST', './includes/components/parascolaire/search.php', true)
        xhr.onload = () => {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    let data = xhr.response
                    resultats.innerHTML = data;
                }
            }
        }
        let formData = new FormData(mySearch);
        xhr.send(formData)
    } else {
        SelectAll();
    }
}

const eventAdd = document.querySelectorAll('.event-add')
eventAdd.onclick = () => {
    console.log('Clicked')
}
</script>