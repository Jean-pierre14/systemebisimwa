<?php
require_once "./db.con.php";

if(isset($_POST['action'])){
    if($_POST['action'] == 'search'){
        print "Loading... ". $_POST['txt'];
    }
    if($_POST['action'] == 'fetch'){

        $sql = mysqli_query($con, "SELECT * FROM students WHERE parascolaireBoolean = ''");
        if($sql){
            // header("Content-Type:","application/json");
            $json_arr = array();

            while($row = mysqli_fetch_assoc($sql)){
                $json_arr[] = $row;
                echo json_encode($json_arr);
            }
        }else{echo "Failed SQL";}
    }
}