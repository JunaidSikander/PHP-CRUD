<?php include 'header.php';
    if(isset($_POST['deletebtn'])){
        $s_id = $_POST['sid'];

        $connection = mysqli_connect("localhost","junaid","root","crud") OR die("Connection Failed");

        $query = "DELETE FROM student WHERE sid = {$s_id}";

        $result = mysqli_query($connection,$query) OR die("Query Unsuccessful");

        header("Location: http://localhost/PHP_CRUD/views/index.php");

        mysqli_close($connection);
    }
?>


<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid"/>
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete"/>
    </form>
</div>
</div>
</body>
</html>