<?php
include('include/dbfunctions.php');
$db = new DB_FUNCTIONS();

session_start(); // Starting Session

if (isset($_REQUEST['lgnbtn'])) {
// Define $username and $password
    $username = $_POST['email'];
    $password = $_POST['password'];

    $query = mysqli_query($db->myconn, "SELECT * FROM `users` WHERE `email`='$username' AND `password`='$password'");

    $rows = mysqli_num_rows($query);

    if ($rows == 1) {
        $_SESSION['user_loged'] = $username; // Initializing Sessions
        header("location: https://sahaay.in"); // Redirecting To Other Page
    } else {

        ?>

        <script type="text/javascript">

            alert("Username or Password not matched try again");

            window.location.href = "index.php";

        </script>

        <?php

    }

} else {


}

?>