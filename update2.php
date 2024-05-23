<?php

    $conn = mysqli_connect('localhost','root','','user_data');
    echo "Connected successfuly";

    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "UPDATE users SET username='$name', email='$email' WHERE id=$id";

    if(mysqli_query($conn, $sql)){
        echo "record udate successfully";
    }else{
        echo "Error updating record: ". $conn->error;
    }

    $conn->close();

    ?>
