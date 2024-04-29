<?php
include("db_connect.php");
if (isset($_POST['edit_product'])) {
    $id = $_GET['id'];
    $productName = $_POST['productname'];

    $query = "UPDATE product SET productName='$productName' where productCode ='$id' ";
    if (mysqli_query($conn, $query) == true) {
        echo "Product has been updated";
    } else {
        echo "product updates fails";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update form</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <main>
        <?php
        include("inc/sidebar.php");
        ?>
        <div class="main-content">
            <h1>UPDATE PRODUCT</h1>
            <form action="" method="post">

                <div>
                    <input type="text" name="productname" required placeholder="Product name">
                </div>
                <div>
                    <input type="submit" name="edit_product">
                </div>

            </form>
            <a href="index.php">Home</a>

        </div>
    </main>

</body>

</html>