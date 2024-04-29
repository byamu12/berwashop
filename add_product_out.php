<?php
include "db_connect.php";
if (isset($_POST['add_product_out'])) {
    $productcode = $_POST['productcode'];
    $date = $_POST['date'];
    $quantity = $_POST['quantity'];
    $unityPrice = $_POST['unityPrice'];
    $totalPrice = $quantity * $unityPrice;

    $query = "INSERT INTO productOut values('$productcode', '$date','$quantity','$unityPrice','$totalPrice')";

    if (mysqli_query($conn, $query) == true) {
        echo "Product was sold successfully";
    } else {
        echo "product was not sold";
    }
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <main>
        <?php
        include("inc/sidebar.php");
        ?>
        <div class="main-content">
            <h1>ADD PRODUCT OUT</h1>
            <form action="" method="post">
                <div>
                    <select name="productcode" id="">
                        <?php
                        $query = "SELECT * FROM product";
                        $result = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($result)) {
                        ?>
                            <option value="<?php echo $row['productCode'] ?>"><?php echo  $row['productName'] ?></option>
                        <?php
                        }

                        ?>
                    </select>
                </div>
                <div>
                    <input type="date" name="date" placeholder="date" required>
                </div>
                <div>
                    <input type="number" name="quantity" placeholder="quantity" required>
                </div>

                <div>
                    <input type="number" name="unityPrice" required placeholder="unity price">
                </div>
                <div>
                    <input type="submit" name="add_product_out" value="add product out">
                </div>
            </form>
            <a href="index.php">Home</a>

        </div>
    </main>

</body>

</html>