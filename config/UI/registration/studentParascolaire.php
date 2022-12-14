<?php
    require_once "../../conn.php";

    $output = '';
    $sql = mysqli_query($con, "SELECT * FROM students WHERE parascolaireBoolean = ''");

    if(@mysqli_num_rows($sql) > 0) {

        $output .= '<ul class="list-group list-group-flush">';
        
        while($row = mysqli_fetch_assoc($sql)){
            $output .= '
            
                <li class="list-group-item py-4 d-flex justify-content-between align-items-center list-group-item-action">
                    '.$row['prenom'].'
                    <span class="btn-group">
                        <button class="btn btn-sm btn-warning event-add" type="button" id="'.$row['id'].'">Action</button>
                    </span>
                </li>
            
            ';

        }
        $output .= '</ul>';
    }else{
        $output = 'ERROR SQL';
    }
    print $output;
?>