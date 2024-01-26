<?php

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $doctor = $_POST['doctor'];

    require_once("dbcon.php");

    $conn = new mysqli('localhost','root','','paradish');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    } else {
        $stmt = $conn->prepare("insert into booking(name,email,phone,date,doctor) values(?,?,?,?,?)");
        $stmt->bind_param("sssss", $name, $email, $phone, $date, $doctor);
        $stmt->execute();
        echo "Booking Successful...!";
        $stmt->close();
        $conn->close();
    }
?>
