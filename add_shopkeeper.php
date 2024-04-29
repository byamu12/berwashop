<?php
include("db_connect.php");

if (isset($_POST['add_shopkeeper'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $hash = md5($password);

    $query = "INSERT INTO shopkeeper VALUES('','$username ','$hash')";
    $result = mysqli_query($conn, $query);
    if ($result == true) {
        echo "user data is inserted";
    } else {
        echo "user dat is not inserted";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add shopkeeper</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <main>
        <?php
        include("inc/sidebar.php");
        ?>
        <div class="main-content">
            <h1>ADD SHOPKEEPER</h1>
            <form action="" method="post">
                <div>
                    <input type="text" name="username" required placeholder="Username">
                </div>
                <div>
                    <input type="password" name="password" required placeholder="Password">
                </div>
                <div>
                    <input type="submit" name="add_shopkeeper" required placeholder="Password">
                </div>

            </form>
            <a href="index.php">Home</a>


        </div>
    </main>

</body>

</html>