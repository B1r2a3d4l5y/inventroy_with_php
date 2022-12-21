<?php
if (isset($_POST["new"])) {
  include 'database.php';
  $equipment_id = $_POST["id"];
  $equipment_name = $_POST["equipmentname"];
  $equipment_price = $_POST["equipmentprice"];
  $quanity = $_POST["quanity"];
  $brand = $_POST["brand"];
  $date_added = $_POST["date"];
  $condition = $_POST["condition"];

  if(empty($equipment_id) || empty($equipment) || $equipment_price || empty($quanity) || empty($brand) || empty($date_addedd)  || empty($condition) ) {
    die("Fields are empty. Please fill them in ");
    header("Location:../index.php?inventry=emptyfields");
  } 


  

}
    
  