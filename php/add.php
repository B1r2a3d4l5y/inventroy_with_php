<?php
// errors global
global $errors = ""
if(isset($_POST['add'])){
    include 'database.php';
    $task = $_POST['task'];
    if(empty($_POST['task'])){
        $errors = "Task  field is empty please fill it out";
    
    } else {
        $_POST['task'];
    }
    $sql =  "INSERT INTO tasks()"
    $stmt = $conn($ql);
    



    }
    
    