<?php
    $con = mysqli_connect('localhost','root','','user_data');
    echo "Connected successfuly";


    $readData = "SELECT username, email FROM users";
    $resultData = mysqli_query($con, $readData);

    // Fetch =data
    if(mysqli_num_rows($resultData)>0){
        // output data of each row
        while($row = mysqli_fetch_assoc($resultData)){
            echo "- Name: " .$row["username"]."- Email: " .$row["email"]. "<br>";
        }
    }else{
        echo "0 results";
    }