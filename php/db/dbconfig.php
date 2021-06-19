<?php
function getconnection(){
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpassword = "";
    $dbname = "myshop";
    $dbconn = new mysqli($dbhost,$dbuser,$dbpassword,$dbname);
    if($dbconn->error){
        echo "ERROR DB CONN";
    }
    return $dbconn;
}
?>