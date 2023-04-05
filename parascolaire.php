<?php require_once "./includes/header.php";
require_once "./configurations/db.con.php";

?>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="my-2 card card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <a href="index.php" class="btn btn-sm btn-success">Retour</a>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-lg-4">
                <div id="result">
                    <h2>Data...student </h2>
                </div>
            </div>
            <div class="col-md-7 col-lg-8">
                <h3 class="display-3">Welcome to bill of sport</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nihil officia quae quod deleniti quia
                    magnam,
                    similique ipsa dicta est soluta ipsum vel assumenda itaque illo!
                </p>
            </div>
        </div>
    </div>
</body>

<script src="./assets/js/jquery-3.4.0.min.js"></script>
<script>
const result = document.getElementById('result')

$(document).ready(function() {
    resultsStudent();

    function resultsStudent() {
        let xhr = new XMLHttpRequest();

        xhr.open("POST", "./configurations/actionsfetch.php", true)
        xhr.onload = () => {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    let data = xhr.response;
                    console.log(data);
                    result.innerHTML = data;
                }
            }
        }
        xhr.send()
    }
})
</script>
<script src="./assets/js/FetchData.ts"></script>

</html>