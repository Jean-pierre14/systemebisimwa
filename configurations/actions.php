<?php
require_once "./db.con.php";

if(isset($_POST['action'])){
    if($_POST['action'] == 'search'){
        print "Loading... ". $_POST['txt'];
    }
}