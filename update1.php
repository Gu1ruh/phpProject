<?php
    $conn = mysqli_connect('localhost','root','','user_data');
    echo "Connected successfuly";

    // retrieve data from the database based on record ID
    $userID = $_POST['id'];

    $sql = "SELECT * FROM users WHERE id = $userID";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result)>0){
        $row = mysqli_fetch_assoc($result);

        ?>
            <form action="update2.php" method="post">
                Name: <input type="text" name="name" value="<?php echo $row['username']; ?>"><br>
                Email: <input type="text" name="email" value="<?php echo $row['email']; ?>"><br>
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <input type="submit" value="Update">
            </form>
        <?php
    }else{
        echo "No records found";
    }

?>