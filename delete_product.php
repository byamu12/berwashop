<?php 
include("db_connect.php");
$id= $_GET['id'];

$query = "DELETE FROM product where productCode = '$id'";
if(mysqli_query($conn, $query)==true){
    echo "Product is deleted";
}else{
    echo "Product was deleted";
}