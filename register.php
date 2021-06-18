<?php
function saveToFile($username,$useremail,$userpassword){
    $logindatafile = fopen("userdata/logindata.csv","a");
    $lineToWrite = "\n".$username.",".$useremail.",".$userpassword;
    fwrite($logindatafile,$lineToWrite);
    return true;
}

$username = $_POST["username"];
$useremail = $_POST["useremail"];
$userpassword = $_POST["userpassword"];

if(saveToFile($username,$useremail,$userpassword)){
    echo "Registered Sucessfully";
}
else{
    echo "Failed to Register";
}
?>