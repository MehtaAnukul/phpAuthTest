<?php

define("DBHOST","localhost");
define("DBUSER","root");
define("DBPWD","");
define("DB","registration");

class DB_FUNCTIONS
{

    var $myconn;

    public function __construct()
    {

        $conn = mysqli_connect(DBHOST, DBUSER, DBPWD, DB);

        $this->myconn = $conn;

        return $this->myconn;

    }


//       function connect() {
//        $con = mysqli_connect(DBHOST,DBUSER,DBPWD,DB);
//        if (!$con)
//        {
//            die('Could not connect to database!');
//        }
//        else
//        {
//            $this->myconn = $con;
//
//        }
//        return $this->myconn;
//    }
}

    ?>