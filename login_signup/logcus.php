<?php
/**
 * Created by PhpStorm.
 * User: Anukul-PC
 * Date: 24-03-2018
 * Time: 03:17 PM
 */

include ('include/dbfunctions.php');

$db = new DB_FUNCTIONS();

session_start();

if(isset($_REQUEST['logbtn'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM `customer` WHERE `email`='$email' AND `password`='$password'";
    $reg_query = mysqli_query($db->myconn, $query);

    $row = mysqli_num_rows($reg_query);

    if ($row == 1) {
        $_SESSION['user_loged'] = $email;
        header("location: http://www.mi.com/in/"); //Redirecting To Other Page
    } else {
        ?>
        <script type="text/javascript">
            alert("email or password not matched try again");
            window.location.href = "index.php";
        </script>
        <?php
    }
}
else{
}

?>