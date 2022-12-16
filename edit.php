<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/edit.css">
    <title>Edit page</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <form class="edit_form col-lg-6 col-md-6 col-sm-12 col-xs-12" action="php/update.php" method="POST">
                <label for="edit_input">

                    <input type="text" class="edit_product_price" name="price" placeholder="Edit product price">
                    <input type="text" class="edit_quanity" name="quanity" placeholder="Edit quanity">  
                    

                </label>
                <button type="submit" class="UpdateBtn btn btn-success" name="update">Update</button>

            </form>

        </div>
    </div>
</body>
</html>