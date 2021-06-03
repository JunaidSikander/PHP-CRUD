<?php
    $s_name = $_POST['sname'];
    $s_address = $_POST['saddress'];
    $s_class = $_POST['class'];
    $s_phone = $_POST['sphone'];

    $connection = mysqli_connect("localhost","junaid","root","crud") OR die("Connection Failed");

    $query = "INSERT INTO student(sname, saddress, sclass, sphone) VALUES('{$s_name}','{$s_address}','{$s_class}','{$s_phone}')";

    $result = mysqli_query($connection,$query) OR die("Query Unsuccessful.");

    header("Location: http://localhost/PHP_CRUD/views/index.php");

    mysqli_close($connection);
?>