<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Edit Record</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid"/>
        </div>
        <input class="submit" type="submit" name="showbtn" value="Show"/>
    </form>

    <?php
    if (isset($_POST['showbtn'])){
    $connection = mysqli_connect("localhost", "junaid", "root", "crud") or die("Connection Failed");

    $s_id = $_POST['sid'];

    $query = "SELECT * FROM student WHERE sid = {$s_id}";
    $options_query = "SELECT * FROM student_class";

    $result = mysqli_query($connection, $query) or die("Query Unsuccessful");
    $options = mysqli_query($connection, $options_query) or die("Query Unsuccessful");

    if (mysqli_num_rows($result) > 0){
    while ($row = mysqli_fetch_assoc($result)) {

    ?>

    <form class="post-form" action="updatedata.php" method="post">
        <div class="form-group">
            <label for="">Name</label>
            <input type="hidden" name="sid" value="<?php echo $row['sid'] ?>"/>
            <input type="text" name="sname" value="<?php echo $row['sname'] ?>"/>
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="saddress" value="<?php echo $row['saddress'] ?>"/>
        </div>
        <div class="form-group">
            <label>Class</label>
            <?php
            if(mysqli_num_rows($options) > 0){
                echo '<select name="sclass">';
                while($option = mysqli_fetch_assoc($options)) {
                    if($row['sclass'] == $option['cid'])
                        $select = "selected";
                    else
                        $select = "";
                    echo "<option {$select} value='{$option['cid']}'>{$option['cname']}</option>";

                }
                echo "</select>";
            } ?>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="sphone" value="<?php echo $row['sphone'] ?>"/>
        </div>
        <input class="submit" type="submit" value="Update"/>
        <?php
        }
        }
        }
        ?>
    </form>
</div>
</div>
</body>
</html>