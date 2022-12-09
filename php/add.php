<?php
// errors global
  $errors = "";
  if(isset($_POST['add'])) {
    include 'database.php';
    $product_name = $_POST['product_name'];
    $product_price = $_POST['productprice'];
    $quanity = $_post['quanity'];

    if(empty($product_name)|| empty($product_price)|| empty($quanity)) {
        $errors = "Fields are empty please fill them out";
        header("Location:../index.html?inventroy=empty");


    } else {
        if(empty($product_name)){
            $errors = "please enter the products name";

        } else {
            if(empty($product_price)) {
                $errors = "Please enter price for product";
                header("Location:../index.html?invetroy=productpriceEmpty");
            } else {
                if(empty($quanity)) {
                    $errors = "please enter a quanity";
                } else {
                    $sql = "INSERT INTO products(product_name, product_price, quanity) VALUES(?,?,?)";
                    if($conn->query($sql) === false) {
                        echo "SQL error" .$sql ."<br>" .$conn->error ;

                    } else {
                        echo "New record created suceessfully";
                    }

                }
            }

        }
    }
  }
  $conn->close();