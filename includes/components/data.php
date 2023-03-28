<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php 
                
                $sql = mysqli_query($con, "SELECT * FROM students ORDER BY id DESC");
                if($sql){
                    $output .= '<ul class="list-group">'; 
                    while($row = mysqli_fetch_array($sql)){
                        $output .= '<li class="list-group-item">
                            <a href="examen.php?event='.$row['id'].'" class="d-flex justify-content-between align-items-center">
                                <span>'.$row['nom'].'</span>
                                <span>'.$row['classe'].'</span>
                            </a>
                        </li>';
                    }
                    $output .= '</ul>';
                }else{
                    $output = '<p class="alert alert-danger">Vous n\'avez pas des donnees dans votre system</p>';
                }
                print $output;
            ?>
        </div>
    </div>
</div>