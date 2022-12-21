<?php
if (isset($_GET['id'])) {
    include 'database.php';
    $id = $_GET['id'];
    $query = mysqli_multi_query("DELETE FROM products WHERE id='$id'; ALTER TABLE  products AUTO_INCREMENT = 1;");
    

} 
header("Location:../index.php");