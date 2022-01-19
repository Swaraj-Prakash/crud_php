<?php
include 'connect.php';
if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $sql = "Delete from crud where id=$id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        // echo "Delet successfully";
        header('location:display.php');
    } else {
        die(mysqli_error($conn));
    }
}
