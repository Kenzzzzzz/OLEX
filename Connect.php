<?php
    // error_reporting(E_ALL);
    // ini_set('display_errors', 1);

    // if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
    //     $conn= mysqli_connect('localhost', 'root', 'root', 'olex') or die("Connection Failed: " .mysqli_connect_error());
    //     $users_query = mysqli_query($conn, "SELECT * FROM mst_acc");
    //     // if ($users_query) {
    //     //     $row = mysqli_fetch_assoc($users_query);
    //     //     $count = $row['username'];
        
    //     //     if ($count > 0) {
    //     //         echo "<p>Username telah diambil. Harap kembali ke halaman <a href='index.php'>pendaftaran</a></p>";
    //     //         // $message = "username diambil";
    //     //         // echo "<script type='text/javascript'>alert('$message');</script>";
    //     //     } else {
    //     //         $message = "Username is available";
    //     //         echo "<script type='text/javascript'>alert('$message');</script>";
    //     //     }
    //     // }

    //     if(isset($_POST['username']) && isset($_POST['password'])){
    //         $username= $_POST['username'];
    //         $password= $_POST['password'];

    //         $sql = "INSERT INTO mst_acc VALUES ('$username', '$password')";
    //         $query = mysqli_query($conn,$sql);
    //         if($query){
    //             header('Location: Signin.php');
    //             exit;
    //         }
    //     }
    // }
?>

<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        $conn = mysqli_connect('localhost', 'root', 'root', 'olex') or die("Connection Failed: " . mysqli_connect_error());
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Check if the username already exists
        $checkQuery = "SELECT * FROM mst_acc WHERE username = '$username'";
        $checkResult = mysqli_query($conn, $checkQuery);
        $count = mysqli_num_rows($checkResult);

        if ($count > 0) {
            // Username already exists
            echo "<script>alert('Username already exists. Please choose a different username.'); setTimeout(function(){ window.location.href = 'Signup.php'; }, 0);</script>";

        } else {
            // Username is available, proceed with the insert
            $insertQuery = "INSERT INTO mst_acc VALUES ('0', '$username', '-', '-', '$password')";
            $insertResult = mysqli_query($conn, $insertQuery);

            if ($insertResult) {
                header('Location: Signin.php');
                exit;
            } else {
                echo "<script>alert('Failed to insert data.');</script>";
            }
        }
    }
?>
