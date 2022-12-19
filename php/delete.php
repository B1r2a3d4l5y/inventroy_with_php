<?php
if(isset($_GET['id'])) {
    include 'database.php';
    $id = $_GET['id'];
    $query = $conn->query("DELETE FROM products WHERE id=$id");
    echo "<font color='green> Record deleted from database '"

} else {
    echo "<font color='red '>Failed to delete record"
}