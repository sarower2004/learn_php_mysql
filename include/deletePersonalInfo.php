<?php 

require 'db.php';
$id = $_GET['id'];
// sql to delete a record
$sql = "DELETE FROM personal_info WHERE id=$id";

if (mysqli_query($conn, $sql)) {

  header("Location: ../index.php?success=Deleted");
} else {
    header("Location: ../index.php?error=Deleted". mysqli_error($conn));
}
