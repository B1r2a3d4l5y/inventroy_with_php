<?php 
if(isset($_POST['add'])){
    include 'database.php';
    $sql = "SELECT product_name, product_price, quanity FROM products;";
    $result = $conn->query($sql);
    $reultCheck = mysqli_num_rows($result);

    if($reultCheck > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
            <td>{$row\ ['Product Name/]} </td>
            <td> {$row\ ['Product Name'\]} </td>;
            <td> {$row\['Quanity'/]} </td>

            "
        }
    }


}