<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <main>
        <?php
        include("inc/sidebar.php");
        ?>
        <div class="main-content">
            <h1>Product List</h1>
            <table border="1">
                <thead>
                    <th>Product Code</th>
                    <th>Date</th>
                    <th>Quantity</th>
                    <th>Unity Price</th>
                    <th>Total Price</th>
                </thead>
                <tbody>
                    <?php
                    include("db_connect.php");
                    $query = "SELECT * FROM productOut";
                    $result = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_array($result)) {
                    ?>
                        <tr>
                            <td><?= $row['productCode'] ?></td>
                            <td><?= $row['date'] ?></td>
                            <td><?= $row['quantity'] ?></td>
                            <td><?= $row['unityPrice'] ?></td>
                            <td><?= $row['totalPrice'] ?></td>
                        </tr>

                    <?php
                    }
                    ?>


                </tbody>
            </table>
        </div>
    </main>
</body>

</html>