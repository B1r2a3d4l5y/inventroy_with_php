<?php
if(isset($_POST['delete']) ) {
    include 'database.php';
    $id = $_POST['id'];
    $query = "DELETE FROM products WHERE id=$id";
    if($conn->query($sql)=== False) {
        echo "<font color=red>Record failed to delete ".$conn->error;

    } else {
        echo "<font color='grreen'> Record was successfully deleted";

    }
}
$conn->close();
