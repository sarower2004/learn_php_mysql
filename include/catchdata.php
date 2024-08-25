<?php require('./db.php');

if(isset($_POST['register-submit'])){
 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $department = $_POST['department'];
    $sql = "INSERT INTO personal_info (name, email, department) VALUES ('$name', '$email', '$department')";

    $query = mysqli_query($conn, $sql);

    if($query){

        header("Location: ../index.php?success=Inserted");
        exit();

    }else{

        header("Location: ../index.php?error=Not inserted");
        exit();

    }
   
}else{
    echo"Again input your info";
}


?>

