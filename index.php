<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/front_page.css">


    <title>inventroy system</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
             <a  class="add btn btn-success"  href="add_item.php" >New </a>
              
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
                            echo "<td>" . $row['equipmentname'] . "</td>";
                            echo "<td>". $row['equipmentprice'] . "</td>";
                            echo "<td>". $row['quanity'] . "</td>";
                            echo "<td>" .$row['brand'] . "</td>";
                            echo "<td>". $row['date'] . "</td>";
                            echo "<td>". $row['condition'] . "</td>";
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

        </div>
        
                 