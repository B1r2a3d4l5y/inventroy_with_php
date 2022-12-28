<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


 <link rel="stylesheet" href="css/add.css">
    <title>add new item  page</title>
</head>
<body>
    <div class="container-fluid">
    <div class="row">
        
            <form class="form col-lg-6 col-md-6 col-sm-12 col-xs-12" action="php/add.php" method="post" id="myform">
                <label for="id">
                    <input type="text" class="id" name="id" placeholder="Enter product id">
                </label>
                <label for="equipment name" class="form_input">
                    <input type="text" class="form_input" name="equipmentname" placeholder="Enter equipment name">
                   
                 

                </label>
                <label for="equipment price">
                     <input type="text" name="equipmentprice" class="form_input" placeholder="Enter price">
                </label>
                <label for="quanity">
                      <input type="text" name="quanity" class="form_input" placeholder="Quanity">

                </label>
                <lael for="brand">
                    <input type="text" class="form_input" name="brand" placeholder="Enter brand name">
                </label>
                <label for="date added">
                    <input type="date" name="date" class="form_input" >
                </label>
                <label for="condition">
                    <input type="text" class="form_input" name="condition" placeholder="Enter  condition of product">
                </label>
                <button type="submit" class="addbtn btn btn-success" name="add">Add new item</button>

    </div>

</div>
    
</body>
</html>