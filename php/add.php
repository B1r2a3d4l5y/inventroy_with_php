<?php
if(isset($_POST["add"]) ) {
   include 'database.php';
   $equipment_id= $_POST["id"];
   $equipment_name = $_POST["equipmentname"];
   $equipment_price = $_POST["equipmentprice"];
   $quanity = $_POST["quanity"];
   $brand = $_POST["brand"];
   $added_date = $_POST["date"];
   $condition = $_POST["condition"];
   //empty
   if(empty($equipment_id|| empty($equipment_name|| empty($equipment_price)|| empty($quanity) || empty($brand)|| empty($date)|| empty($condition))) ) {
    die("Fields are empty. Please fill them in ");
    header("Location:../index.php?inventry=empty");

   }  elseif(!is_numeric($equipment_price)){
    die("price must be a numbers only");
    header("Location:../index.php?inventry=invalidpricechar");

   } elseif(!is_numeric($quanity)) {
    die("Quanity field must be numbers only ");
    header("Location:../index.php?inventroy=quanitymustbenumber");

   } else {
      $sql = "INSERT INTO equipment(id, equipment_name, equipment_price, quanity, brand, date_added, new_or_old)VALUES(?,?,?,?,?,?,?)";
      $stmt = mysqli_stmt_init($conn);
      // errors 
      if(!mysqli_stmt_prepare($stmt,$sql)) {
         die("SQL error");

      } else {
         mysqli_stmt_bind_param($stmt, "sssssss", $equipment_id, $equipment_name,$equipment_price,$quanity,$brand, $added_date, $condition);
         mysqli_stmt_execute($stmt);

      } 
   }
 
 } else {
   header("Location:../index.php");
 }
 $conn->close();


   