<?php 
require './db.php';

$id = $_GET['id'];

if(isset($_POST['update-submit'])){
 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $department = $_POST['department'];
    $sql = "UPDATE personal_info SET name='$name', email='$email', department='$department' WHERE id = $id ";

    $query = mysqli_query($conn, $sql);

    if($query){

        header("Location: ../index.php?successUpdate=Updated");
        exit();

    }else{

        header("Location: ../index.php?errorUpdate=Not updated");
        exit();

    }
   
}else{
    echo"Something went to wrong!";
}
