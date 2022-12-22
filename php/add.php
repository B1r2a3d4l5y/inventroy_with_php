<?php
if(isset($_POST["add"]) ) {
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

   } elseif($equipment_id === $_POST['id']){
    die("ID alreay exists. Please fill in a new one");
    header("Location:../inventroy=idexisits");

   } elseif(!is_numeric($equipment_price)){
    die("price must be a numbers only");
    header("Location:../index.php?inventry=invalidpricechar");

   } elseif(!is_numeric($quanity)) {
    
   }

}