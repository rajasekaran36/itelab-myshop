<?php
require_once('/php/db/dbconfig.php');
if (isset($_POST["submit"])) {
    $productname = $_POST["productname"];
    $productquantity = $_POST["productquantity"];
    $productimage = $_FILES["productimage"]["name"];
    $conn = getconnection();
    $image = addslashes(file_get_contents($_FILES["productimage"]["tmp_name"]));
    $sql = "INSERT into products(name,quantity,image)values('" . $productname . "','" . $productquantity . "','" . $image . "')";
    if ($conn->query($sql) === TRUE) {
        echo "product uploaded";
    } else {
        echo "problem";
    }
} 
else {
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
        <h2>Product Update</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td><label for="productname">Product Name:</label></td>
                    <td><input type="text" name="productname"></td>
                </tr>
                <tr>
                    <td><label for="productquantity">Quantity:</label></td>
                    <td><input type="number" name="productquantity"></td>
                </tr>
                <tr>
                    <td><label for="productimage">Product Image:</label></td>
                    <td><input type="file" name="productimage"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="upload"></td>
                </tr>
            </table>
        </form>
    </body>
    </html>
<?php 
} 
?>