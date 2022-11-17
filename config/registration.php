<?php
    
    require_once __DIR__ . "./db.php";

    class API{

        function Create(){
            
            $db = new Connect;

            $data = $db->prepare("INSERT INTO students SET prenom ");

            return json_encode($data);  
        }
    }


?>