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
                    <th>Product Name</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <?php
                    include("db_connect.php");
                    $query = "SELECT * FROM product";
                    $result = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_array($result)) {
                    ?>
                        <tr>
                            <td><?= $row['productCode'] ?></td>
                            <td><?= $row['productName'] ?></td>
                            <td>
                                <a href="edit_product.php?id=<?php echo $row['productCode'] ?>">Edit</a>
                                <a href="delete_product.php?id=<?php echo $row['productCode'] ?>">Delete</a>
                            </td>
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