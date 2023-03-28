<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">

            <div class="col-md-<? (isset($_GET['event'])) ? '4' : '8'?>">
                <!-- fetching data using Ajax -->
                <div class="card card-body m-2">
                    <form action="#" method="post">
                        <input type="search" name="search" id="search" placeholder="search..." class="form-control">
                    </form>
                </div>
                <?php 
                    require_once "./backend/db.config.php";
                    include_once "./includes/components/data.php";
                ?>

            </div>
            <div class="col-md-4">
                <?php if(isset($_GET['event'])):?>
                <?php require_once "./includes/components/examenMark.php";?>
                <?php else:?>
                <h3 class="display-2">Events</h3>
                <?php endif;?>
            </div>
        </div>
    </div>
</body>

<!-- <script>
const myForm = document.getElementById('myForm')

myForm.onsubmit = (e) => {
    e.preventDefault()


}
</script> -->

</html>