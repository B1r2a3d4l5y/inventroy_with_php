<?php
// errors global
   $emptyError="";  $productnameEror = "" ; $product_priceError = ""; $quanityError = "";
  if(isset($_POST['add'])) {
    require 'database.php';
    $product_name = $_POST['productname'];
    $product_price = $_POST['productprice'];
    $quanity = $_POST['quanity'];

    if(empty($product_name)|| empty($product_price)|| empty($quanity)){
      $emptyError = "Fields are empty. Please fill them in";
      header("Location:./index.php?inventroyempty");  
     }  elseif(!is_numeric($product_price)){
        $product_priceError = "Price field must contain numbers only";
        header("Location:../index.php?inventroypriceinvalidchar");

      } elseif(!is_numeric($quanity)){
          $quanityError = "Quanity field must contain numbers only";
          header("Location:../index.php?inventroyquanityinvalidchar");


        } else {
          $sql = "INSERT INTO products(product_name, product_price, quanity) VALUES(?,?,?);";
         $stmt = mysqli_stmt_init($conn);
         //check sql errors
         if(!mysqli_stmt_prepare($stmt, $sql)) {
          die("SQL error") ;
         } else {
          mysqli_stmt_bind_param($stmt, "sss", $product_name, $product_price, $quanity);
          mysqli_stmt_execute($stmt);
         }
          
        }
  }
  header("Location:../index.php");
  $conn->close();
      
    
  