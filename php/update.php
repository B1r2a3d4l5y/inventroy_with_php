<?php
if (isset($_POST['update'])) {
    require 'database.php';
    $price = $_POST['price'];
    $quanity = $_POST['quanity'];
    $result = $conn->query("UPDATE products SET product_price=$price WHERE quanity=$quanity;  ");
    header("Location:../index.php");

    

}

     


