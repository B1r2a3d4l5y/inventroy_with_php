<?php
if (isset($_GET['id'])) {
    include 'database.php';
    $id = $_GET['id'];
    $query = $conn->query("DELETE FROM products WHERE id='$id' ");
    

} 
header("Location:../index.php");