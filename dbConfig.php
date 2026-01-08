<?php
   function connect()
   {
        $hostName = "localhost";
        $userName = "root";
        $userPassword = "";
        $dbName = "gmit_online_blood_donation";

        $conn = mysqli_connect($hostName, $userName, $userPassword, $dbName);

        return $conn;
   }
?>