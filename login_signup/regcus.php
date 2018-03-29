<?php
/**
 * Created by PhpStorm.
 * User: Anukul-PC
 * Date: 24-03-2018
 * Time: 02:38 PM
 */
include ('include/dbfunctions.php');

$db = new DB_FUNCTIONS();

if(isset($_REQUEST['signbtn'])) {

    if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['c_password'])) {

        $email = $_POST['email'];
        $password = $_POST['password'];
        $c_password = $_POST['c_password'];

        $sql_email = "SELECT * FROM `customer` WHERE email='$email'";
        $reg_email = mysqli_query($db->myconn, $sql_email);

        if (mysqli_num_rows($reg_email) > 0) {
            ?>
            <script>
                alert("email id already exist !")
                window.location.href = "index.php";
            </script>
            <?php
        } else {
            $insert_query = "INSERT INTO `customer`(`email`, `password`, `c_password`) VALUES ('$email','$password','$c_password')";
            $query_run = mysqli_query($db->myconn, $insert_query);

            if (isset($query_run)) {
                ?>
                <script>
                    alert("Registration successfully..");
                    window.location.href = "index.php";
                </script>
                <?php
            } else {
                ?>
                <script>
                    alert("Error ! not successfully..");
                    window.location.href = "index.php";
                </script>
                <?php
            }
        }
    } else {
        header("location: index.php");
    }
}
else{
        header("location: index.php");
    }

?>