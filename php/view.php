<?php 
if(isset($_POST['add'])){
    include 'database.php';
    $sql = "SELECT * FROM products;;";
    $result = $conn->query($sql);
    $reultCheck = mysqli_num_rows($result);

    if($reultCheck > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            
            echo "<tbody>";
            echo "<tr>";
            echo "<td> $row['Product Name'] </td>";
            echo "<td> $row['Product Price'] </td>;"
            echo "<td> $row['Quanity'] <td>";
            

          
        }
    }


}