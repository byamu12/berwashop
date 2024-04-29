<?php
include("db_connect.php");

if (isset($_POST['add_product'])) {
    $productcode = $_POST['productcode'];
    $date = $_POST['date'];
    $quantity = $_POST['quantity'];
    $unityPrice = $_POST['unityPrice'];
    $totalPrice = $quantity * $unityPrice;

    $query = "INSERT INTO productIn VALUES('$productcode ','$date','$quantity', '$unityPrice','$totalPrice')";
    $result = mysqli_query($conn, $query);
    if ($result == true) {
        echo "Product purchase added successfully";
    } else {
        echo "product purchased not added";
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
            <h1>ADD PRODUCT IN</h1>
            <form action="" method="post">

                <div>
     
                    <select name="productcode" id="">
                        <?php
                        $query = "SELECT * FROM product";
                        $result = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($result)) {
                        ?>
                            <option value="<?php echo $row['productCode'] ?>"><?php echo $row['productName'] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div>
                    <input type="date" name="date" required placeholder="date">
                </div>
                <div>
                    <input type="number" name="quantity" required placeholder="quantity">
                </div>
                <div>
                    <input type="number" name="unityPrice" required placeholder="unity price">
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