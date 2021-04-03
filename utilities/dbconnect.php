<?php

class Dbconnect {

    public static function getConnection() {
        //properties

        $host = "sql203.epizy.com";
        $user = "epiz_28290570";
        $password = "AuFZQm25QqHhhU";
        $database = "epiz_28290570_myaccount13";
        $port = "3306";

        //create connection

        $con = mysqli_connect($host, $user, $password, $database, $port);

//check connection

        if (mysqli_connect_errno()) {
            echo 'Fail to connect to mysql' . mysqli_connect_error();
        }
        return $con;
    }

}
