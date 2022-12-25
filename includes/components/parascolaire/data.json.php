<?php
    include_once "../../../config/conn.php";
    $sql = mysqli_query($con, "SELECT * FROM students 
                                INNER JOIN parascolaire_tb 
                                ON students.id = parascolaire_tb.student_Id");
    $output = '';
    if($sql){
        $output = 'Chargement...';
        sleep(1);
        if(@mysqli_num_rows($sql) > 0){
            $output = '';
            $output .= '<ul class="list-group list-group-flush">';
            while($row = mysqli_fetch_array($sql)){
                $output .= '
                <li
                    class="list-group-item py-3 d-flex justify-content-between align-items-center list-group-item-action">
                    '.$row['prenom'].'
                    <span class="btn-group visibility">
                        <button class="btn btn-sm btn-warning" type="button" id="non">Non</button>
                        <button class="btn btn-sm btn-primary" type="button" id="oui">Oui</button>
                        <button class="btn btn-sm btn-danger" type="button" id="oui">Effacer</button>
                    </span>
                </li>
            ';
            }
            $output .= '</ul>';
        }else{
            $output = '<p class="alert alert-warning">Vous n\'avaz pas des donnees :(</p>';
        }
    }else{
        $output = 'Network problem';
    }
    print $output;
?>