<?php
    require_once __DIR__ . './db.php';

    class API{
        function Select(){
            $db = new Connect;
            $students = array();
            $data = $db->prepare('SELECT * FROM students ORDER BY id');
            $data->execute();
            while($output = $data->fetch(PDO::FETCH_ASSOC)){
                $students[$output['id']] = array(
                    'id' => $output['id'],
                    'nom' => $output['nom'],
                    'prenom' => $output['prenom'],
                    'classe' => $output['classe'],
                    'annee' => $output['annee'],
                );
            }
            return json_encode($students);
        }
        function Create(){
            $prenom = '';
            $nom = '';
            $classe = '';
            $annee = '';
            // Create query

            $query = 'INSERT INTO students 
                SET 
                    prenom = :prenom,
                    nome = :nom,
                    classe = :classe,
                    annee = :annee 
                ';

            // Prepare stmt
            $stmt = $this->db->prepare($query);

            // Clean data
            $this->prenom = htmlspecialchars(strip_tags(trim($prenom)));
            $this->nom = htmlspecialchars(strip_tags(trim($nom)));
            $this->classe = htmlspecialchars(strip_tags(trim($classe)));
            $this->annee = htmlspecialchars(strip_tags(trim($annee)));

            
        }
    }

    $API = new API;
    header('Acess-Control-Allow-Origin: *');
    header('Content-Type: application/json');
    echo $API->Select();
?>