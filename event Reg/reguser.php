<?php
/**
 * Created by PhpStorm.
 * User: Anukul-PC
 * Date: 05-03-2018
 * Time: 05:07 PM
 */

include('include/dbfunctions.php');

$db = new DB_FUNCTIONS();

if (isset($_REQUEST['regbtn'])) {


//    Server sidee validation
    if (isset($_POST['firstname'])
        && isset($_POST['lastname'])
        && isset($_POST['email'])
        && isset($_POST['password'])) {

        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];


        $sql_email = "SELECT * FROM users WHERE email='$email'";
        $res_email = mysqli_query($db->myconn, $sql_email);

        if (mysqli_num_rows($res_email) > 0) {
            ?>
            <script>
                alert("Email ID already exist !")
                window.location.href = "index.php";
            </script>
            <?php
        } else {

            $insert_query = "INSERT INTO `users`(`firstname`, `lastname`, `email`, `password`) VALUES ('$firstname','$lastname','$email','$password')";
            $query_run = mysqli_query($db->myconn, $insert_query);

            if (isset($query_run)) {
                ?>
                <script>
                    alert("Registration Successful");
                    window.location.href = "index.php";
                </script>
                <?php
            } else {
                ?>
                <script>
                    alert("Error: Not successfully ! try again");
                    window.location.href = "index.php";
                </script>
                <?php
            }
        }

    } else {
        header("location: index.php");
    }

} else {
    header("location: index.php");
}


?>