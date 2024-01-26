<?php
include 'dbcon.php';

if(isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $sql = "delete from crud where D_id = $id";
    $result = mysqli_query($connection, $sql);

    if($result) {
        //echo "Deleted Successful...";
        header('location: display.php');
    } else {
        die(mysqli_error($connection));
    }
}
?>
