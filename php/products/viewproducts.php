<?php
if(isset($_GET["clear"])){
    $_SESSION["cart"] = array();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
            <?php
            require_once('dbconfig.php');
            $conn = getconnection();
            $sql = "SELECT * from products";
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) {
            ?>
              <td>
              <table>
                  <form action="cart.php" method="get">
                    <tr>
                        <td><label><?php echo $row["name"] ?></label></td>
                    </tr>
                    <tr>
                        <td><img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" /></td>
                    </tr>
                    <tr>
                        <td><label><?php echo $row["quantity"] ?></label></td>
                        
                    </tr>
                    <tr>
                        <td><input type="submit" value="BUY"></td>
                    </tr>
                    </form>
                </table>
                </td>
            <?php
            }
            ?>
    </table>
    <input type="submit" value="clear cart" name="clear">
</body>

</html>