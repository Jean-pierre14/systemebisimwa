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

<script>
const myData = document.querySelector('#myData');

function mySelect() {
    const selectData = document.querySelector('#mois').value;
    let xhr = new XMLHttpRequest();
    xhr.onload = () => {}
    xhr.open('POST', 'url', true)
    xhr.setRequestHeader('Content-type', 'application/json');
    const formData = new FormData(myData);
    xhr.send(formData);
}
</script>