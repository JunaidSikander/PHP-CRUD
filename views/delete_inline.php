<?php
$s_id = $_GET['id'];

$connection = mysqli_connect("localhost", "junaid", "root", "crud") or die("Connection Failed");

$query = "DELETE FROM student WHERE sid = {$s_id}";

$result = mysqli_query($connection, $query) or die("Query Unsuccessful");

header("Location: http://localhost/PHP_CRUD/views/index.php");

mysqli_close($connection);
?>