<?php

    $output = '';
    $errors = [];

    require_once "../../../config/conn.php";

    if(isset($_POST['action'])) {

        if($_POST['action'] === 'searchone'){
            $text = mysqli_real_escape_string($con, htmlentities(trim($_POST['text'])));
            if(!$text){
                array_push($errors, "Le champs de saisi est vide");
            }else{
                $sql = mysqli_query($con, "SELECT * FROM students 
                    WHERE parascolaireBoolean = '' AND (prenom LIKE '%".$text."%') 
                    ORDER BY prenom ASC LIMIT 8");

                if(@mysqli_num_rows($sql) > 0) {

                    $output .= '<ul class="list-group list-group-flush">';
                    
                    while($row = mysqli_fetch_assoc($sql)){
                        $output .= '
                        
                            <li class="list-group-item py-4 d-flex justify-content-between align-items-center list-group-item-action">
                                '.$row['prenom']. ' '.$row['nom'].'
                                <span class="btn-group visibility">
                                    <button class="btn btn-sm btn-warning event-add" type="button" data="'.$row['prenom']. ' '.$row['nom'].'" id="'.$row['id'].'">Action</button>
                                </span>
                            </li>
                        
                        ';

                    }
                    $output .= '</ul>';
                }else{
                    $output = '<p class="alert alert-warning"> L\'element que vous cherchez ne pas trouver</p>';
                }
                print $output;
            }
            
        }
        if($_POST['action'] === 'addPara'){
            $Id = mysqli_real_escape_string($con, htmlentities(trim($_POST['id'])));

            $sql = mysqli_query($con, "SELECT * FROM students WHERE id = $Id");
            $data = mysqli_fetch_assoc($sql);

            $fullname = $data['nom'] . ' ' . $data['prenom'];

            if($sql){
                $sql2 = mysqli_query($con, "INSERT INTO parascolaire_tb(student_Id, Fullname) VALUES($Id, '$fullname')");

                if($sql2){
                    $sql3 = mysqli_query($con, "UPDATE students SET parascolaireBoolean = 'Active' WHERE id = $Id");
                    if($sql3):
                        echo "success";
                    else:
                        echo "error";
                    endif;
                }else{
                    echo "error";
                }
            }else{
                echo "error";
            }
        }
    }
?>