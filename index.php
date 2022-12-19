<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="css/front_page.css">


    <title>inventroy system</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <form class="form col-lg-6 col-md-6 col-sm-12 col-xs-12" action="php/add.php" method="post" id="myform">
                <label for="product name" class="form_input">
                    <input type="text" class="productname" name="productname" placeholder="Enter product name">
                   
                 

                </label>
                <label for="product price">
                     <input type="text" name="productprice" class="productprice" placeholder="Enter price">
                </label>
                <label for="quanity">
                      <input type="text" name="quanity" class="quanity" placeholder="Enter  a quanity amount">

                </label>
                  <button type="submit" class="add btn btn-success" name="add">Add new product</button>
              
                <table class="table ">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Product Name</th>
                            <th>Product Price</th>
                            <th>Quanity</th>
                            <th>Edit</th>
                            <th>Delete</th>

                        </tr>

                    </thead>
                    <tbody>
                        <?php
                        include 'php/database.php';
                        $result  = $conn->query("SELECT * FROM products;");
                        while($row = mysqli_fetch_array($result) ) {
                            echo "<tr>";
                            echo "<td>".$row["id"]. "</td>";
                            echo "<td>" . $row["product_name"] . "</td>";
                            echo "<td>". $row["product_price"] . "</td>";
                            echo "<td>". $row["quanity"] . "</td>";
                            echo "<td>
                            <a  class='edit btn btn-info btn-sm'  name='edit' href='php/update.php'>Edit</a></td>";
                            echo "<td><a href='delete.php?id=$row['id'];>Delete</a>". "</td"> ;
                        



                        }
                        ?>
                        
                        
                        

    




                        

                        

                    </tbody>
                </table>
                    

            </form>
        </div>

    </div>
    
</body>
</html>