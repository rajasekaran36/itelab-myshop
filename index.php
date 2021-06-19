<?php
require_once('./php/db/dbops.php');
if (isset($_POST["useremail"])) {
    $username = verify_user($_POST["useremail"], $_POST["userpassword"]);
    if ($username != "") {
        session_start();
        $_SESSION["username"] = $username;
        header("Location: welcome.php");
    }
}
?>
<html>
<head>
    <title>MyShop</title>
</head>
<body>
    <h2>Myshop Website</h2>
    <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
        <table>
            <tr>
                <td><label for="useremail">Email:</label></td>
                <td><input type="text" name="useremail" required></td>
            </tr>
            <tr>
                <td><label for="userpassword">Password:</label></td>
                <td><input type="password" name="userpassword" required></td>
            </tr>
            <tr>
                <td><input type="submit" value="Log in"></td>
                <td><input type="button" onclick="window.location.href='php/signup.php'" value="Sign Up"></td>
            </tr>
        </table>
    </form>
</body>

</html>