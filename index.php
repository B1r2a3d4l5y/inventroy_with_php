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
                <label for="id">
                    <input type="text" class="id" name="id" placeholder="Enter product id">;
                </label>
                <label for="equipment name" class="form_input">
                    <input type="text" class="equipmentname" name="productname" placeholder="Enter equipment name">
                   
                 

                </label>
                <label for="equipment price">
                     <input type="text" name="equipmentprice" class="equipmentprice" placeholder="Enter price">
                </label>
                <label for="quanity">
                      <input type="text" name="quanity" class="quanity" placeholder="Quanity">

                </label>
                <lael for="brand">
                    <input type="text" class="brand" name="brand" placeholder="Enter brand name">
                </label>
                <label for="date added">
                    <input type="date" name="date" >
                </label>
                <label for="condition">
                    <input type="text" name="condition" placeholder="Enter  condition of product">
                </label>
                  <button type="submit" class="add btn btn-success" name="new">New </button>
              
                <table class="table table-bordered ">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Equipment name</th>
                            <th>Equipment Price</th>
                            <th>Quanity</th>
                            <th>Brand</th>
                            <th>Date added</th>
                            <th>Condition</th>
                            <th>Edit</th>
                            <th>Delete</th>

                        </tr>

                    </thead>
                    <tbody>
                        <?php
                        include 'php/database.php';
                        $result  = $conn->query("SELECT * FROM equipment;");
                        while($row = mysqli_fetch_array($result) ) {
                            echo "<tr>";
                            echo "<td>".$row['id']. "</td>";
                            echo "<td>" . $row['product_name'] . "</td>";
                            echo "<td>". $row['product_price'] . "</td>";
                            echo "<td>". $row['quanity'] . "</td>";
                            echo "<td><a href='php/update.php' class='edit btn btn btn-info btn-sm'/a>Edit</td>";
                            echo "<td><a class='btn btn-danger btn-sm' href='php/delete.php?id=".$row['id']. "'>Delete</a></td>";
                        



                            
                        }
                        ?>

                        
                        
                        

    




                        

                        

               
                </table>
               
                  
                        <div class="col-lg-6 col-md-6 colsm-12 col-xs-12">
                            <div class= "row">
                            <ul class="pagination pagination-sm">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link">Next</a></li>
                            </ul>

                            </div>
                        </div>
                 
            
                    

            </form>
        </div>

    </div>
    
</body>
</html>