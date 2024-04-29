<?php
include("db_connect.php");

if (isset($_POST['add_product'])) {
    $productname = $_POST['productname'];

    $query = "INSERT INTO product VALUES('','$productname ')";
    $result = mysqli_query($conn, $query);
    if ($result == true) {
        echo "Product data is inserted";
    } else {
        echo "product data is not inserted";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add produt</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <main>
        <?php
        include("inc/sidebar.php");
        ?>
        <div class="main-content">
            <h1>ADD PRODUCT</h1>
            <form action="" method="post">

                <div>
                    <input type="text" name="productname" required placeholder="Product name">
                </div>
                <div>
                    <input type="submit" name="add_product">
                </div>

            </form>
            <a href="index.php">Home</a>

        </div>
    </main>

</body>

</html>