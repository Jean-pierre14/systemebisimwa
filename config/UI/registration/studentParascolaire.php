<?php
    require_once "../../conn.php";

    $output = '';
    
    $sql = mysqli_query($con, "SELECT * FROM students WHERE (parascolaireBoolean = '') ORDER BY prenom ASC LIMIT 8");

    if(@mysqli_num_rows($sql) > 0) {

        $output .= '<ul class="list-group list-group-flush">';
        
        while($row = mysqli_fetch_assoc($sql)){
            $output .= '
            
                <li class="list-group-item py-4 d-flex justify-content-between align-items-center list-group-item-action">
                    '.$row['prenom']. ' '.$row['nom'].'
                    <span class="btn-group visibility">
                        <button class="btn btn-sm btn-warning event-add" data-fullname="'.$row['prenom']. ' '.$row['nom'].'" type="button" id="'.$row['id'].'">Action</button>
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