<?php
function verifyUser($useremail,$userpassword){

    $logindatafile = fopen("userdata/logindata.csv","r");
    while(!feof($logindatafile)){
        $line = fgets($logindatafile);
        $data = explode(",",$line);
        if($data[1] == $useremail && $data[2] == $userpassword){
            return $data[0];
        }
    }
    return "NONE";
}


$useremail = $_POST["useremail"];
$userpassword = $_POST["userpassword"];
$username = verifyUser($useremail,$userpassword);

if($username != "NONE"){
    echo "LOGIN PASSED";
    echo "<h3> Welcome... ".$username."</h3>";   
}

else{
    echo "LOGIN FAILED <br>";
    echo "<a href='signup.html'/>Sign UP</a>";
}
?>