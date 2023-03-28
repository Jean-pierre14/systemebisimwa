<div class="card card-body my-2">
    <?php 
        $Id = $_GET['event'];
        $sql = mysqli_query($con, "SELECT * FROM students WHERE id = $Id");
        if($sql){
            $row = mysqli_fetch_array($sql);
        }else{
            header('location: examen.php');
        }
    ?>
    <h3><?= $row['nom'];?></h3>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $row['id'];?>">
        <div class="form-group">
            <label for="porcentage">Pourcentage</label>
            <input type="number" name="pourcentage" id="pourcebtage" placeholder="%" class="form-control">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Enregistre</button>
        </div>
    </form>
</div>