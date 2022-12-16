<?php
if (isset($_GET['delete'])) {
    include 'database.php';
    delete();
}
function delete() {
    $query = $conn->query("DELETE FROM products WHERE id=$id");

}