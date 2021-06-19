<?php
function saveToFile($username, $useremail, $userpassword){
    $logindatafile = fopen("data/logindata.csv", "a");
    $lineToWrite = "\n" . $username . "," . $useremail . "," . $userpassword;
    fwrite($logindatafile, $lineToWrite);
    return true;
}

function verifyUserFromFile($useremail,$userpassword){
    $logindatafile = fopen("data/logindata.csv","r");
    while(!feof($logindatafile)){
        $line = fgets($logindatafile);
        $data = explode(",",$line);
        if($data[1] == $useremail && $data[2] == $userpassword){
            return $data[0];
        }
    }
    return "NONE";
}
?>
