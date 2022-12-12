<?php
// errors global
   $emptyError="";  $productnameEror = "" ; $product_priceError = ""; $quanityError = "";
  if(isset($_POST['add'])) {
    include 'database.php';
    $product_name = $_POST['productname'];
    $product_price = $_POST['productprice'];
    $quanity = $_POST['quanity'];

    if(empty($product_name)|| empty($product_price)|| empty($quanity)){
      $emptyError = "Fields are empty. Please fill them in";
      header("Location:./index.html?inventroy=empty");  
     }  elseif(!is_numeric($product_price)){
        $product_priceError = "Price field must contain numbers only";
        header("Location:../index.html?inventroy=priceinvalidchar");

      } elseif(!is_numeric($quanity)){
          $quanityError = "Quanity field must contain numbers only";
          header("Location:../index.html?inventroy=quanityinvalidchar");


        } else {
          $stmt = $conn->prepare("INSERT INTO prodcuts(Product_name, product_price, quanity)VALUES(?,?,?);");
          $stmt->bind_param("sss", $product_name, $product_price, $quanity);
          
        }
      }
      $stmt->excute();
      
    
  