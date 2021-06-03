<?php include("header.php"); ?>
<div id="main-content">

    <?php
        $connection = mysqli_connect("localhost","junaid","root","crud") OR die("Connection Failed");

        $query = "SELECT * FROM student JOIN student_class ON student.sclass = student_class.cid";

        $result = mysqli_query($connection,$query) OR die("Query Unsuccessful");
        if(mysqli_num_rows($result)){
            echo "<h2>All Records</h2>";
            ?>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Class</th>
        <th>Phone</th>
        <th>Action</th>
        </thead>
        <tbody>
        <?php   while($row = mysqli_fetch_assoc($result)){ ?>

        <tr>
            <td><?php echo $row['sid'] ?></td>
            <td><?php echo $row['sname'] ?></td>
            <td><?php echo $row['saddress'] ?></td>
            <td><?php echo $row['cname'] ?></td>
            <td><?php echo $row['sphone'] ?></td>
            <td>
                <a href='edit.php'>Edit</a>
                <a href='delete_inline.php'>Delete</a>
            </td>
        </tr>
        <?php } ?>
        </tbody>
    </table>
    <?php } else {
            echo "<h2>No Record Found</h2>";

            mysqli_close($connection);
        } ?>
</div>
</div>
</body>
</html>