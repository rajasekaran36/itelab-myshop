<?php
require_once('db/dbops.php');
if(isset($_POST["username"])){
    $created = create_user($_POST["username"],$_POST["useremail"],$_POST["userpassword"]);
    if($created){
        header("Location: index.php");   
    }
    else{
        echo "problem in creating user";
    }
}
?>
<html>
<head>
    <title>MyShop</title>
</head>
<body>
    <h2>Myshop Website - Sign Up</h2>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <table>
            <tr>
                <td><label for="username">Name:</label></td>
                <td><input type="text" name="username" required></td>
            </tr>
            <tr>
                <td><label for="useremail">Email:</label></td>
                <td><input type="text" name="useremail" required></td>
            </tr>
            <tr>
                <td><label for="userpassword">Password:</label></td>
                <td><input type="password" name="userpassword" required></td>
            </tr>
            <tr>
                <td><input type="submit" value="Register"></td>
            </tr>
        </table>
    </form>
</body>
</html>