<?php
require_once('dbconfig.php');
function verify_user($email, $password){
    $conn = getconnection();
    $tablename = "logindata";
    $query = "SELECT * FROM " . $tablename;
    $result = $conn->query($query);
    while ($row = $result->fetch_assoc()) {
        if ($row["email"] == $email && $row["password"] == $password) {
            return $row["name"];
        }
    }
    return "";
}

function create_user($name,$email,$password){
    $conn = getconnection();
    $tablename = "logindata";
    $query = "INSERT into ".$tablename."(name,email,password) values ('".$name."','".$email."','".$password."')";
    $result = $conn->query($query);
    if($result === TRUE){
        return true;
    }
    return false;
}
?>
