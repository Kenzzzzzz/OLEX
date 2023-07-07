<?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    $conn = new mysqli('localhost', 'root', 'root', 'coba');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into regist values('username', 'password')");
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        echo "Registration Succesfully,,,";
        $stmt->close();
        $conn->close();
    }
?>