<?php
    $s_id = $_POST['sid'];
    $s_name = $_POST['sname'];
    $s_address = $_POST['saddress'];
    $s_class = $_POST['sclass'];
    $s_phone = $_POST['sphone'];

    $connection = mysqli_connect("localhost","junaid","root","crud") OR die("Connection Failed");

    $query = "UPDATE student SET sname = '{$s_name}', saddress = '{$s_address}', sclass = '{$s_class}', sphone = '{$s_phone}' WHERE sid = '{$s_id}'";

    $result = mysqli_query($connection,$query) OR die("Query Unsuccessful.");

    header("Location: http://localhost/PHP_CRUD/views/index.php");

    mysqli_close($connection);
?>