<?php
    include('dbConfig.php');

    function addDonor($data)
    {
        $emailid = $data['emailid'];
        $name = $data['name'];
        $password = $data['password'];
        $contact = $data['contact'];
        $location = $data['location'];
        $blood_group = $data['blood_group'];
        $status = $data['status'];

        $conn = connect();

        $sql = "INSERT INTO Donor (emailid, name, password, contact, location,blood_group, status) 
            VALUES (?, ?, ?, ?, ?, ?, ?)";

        $stmt = mysqli_prepare($conn, $sql);

        if ($stmt === false) {
            die("MySQL prepare error: " . mysqli_error($conn));
        }

        mysqli_stmt_bind_param($stmt, "sssssss", $emailid, $name, $password, $contact, $location, $blood_group, $status);

        $response = mysqli_stmt_execute($stmt);

        mysqli_stmt_close($stmt);
        mysqli_close($conn);

        return $response;
    }

    function updateDonor($data)
    {
        $emailid = $data['emailid'];
        $name = $data['name'];
        $password = $data['password'];
        $contact = $data['contact'];
        $location = $data['location'];
        $blood_group = $data['blood_group'];
        $status = $data['status'];

        $conn = mysqli_connect('localhost', 'root', '', 'dmit_db');

        if($conn)
        {
            $sql = "update Donor set name=?, password=?, contact=?, location=?, blood_group=?, status=? where email = ?";

            $stmt = mysqli_prepare($conn, $sql);

            if ($stmt === false) {
                die("MySQL prepare error: " . mysqli_error($conn));
            }

            mysqli_stmt_bind_param($stmt, "sssssss", $name, $password, $contact, $location, $blood_group, $status,$emailid);

            $response = mysqli_stmt_execute($stmt);

            mysqli_stmt_close($stmt);
            mysqli_close($conn);

            return $response;
        }
    }

    function deleteDonor($emailid)
    {
        $conn = connect();

        if($conn)
        {
            $sql = "delete from Donor where emailid = ?";

            $stmt = mysqli_prepare($conn, $sql);

            if ($stmt === false) {
                die("MySQL prepare error: " . mysqli_error($conn));
            }

            mysqli_stmt_bind_param($stmt, "s", $emailid);

            $response = mysqli_stmt_execute($stmt);

            mysqli_stmt_close($stmt);
            mysqli_close($conn);

            return $response;
        }
    }

    function getDonorDetails($emailid)
    {
        $conn = connect();

        if($conn)
        {
            $sql = "select *from Donor where emailid=?";

            $stmt = mysqli_prepare($conn, $sql);

            if ($stmt === false) {
                die("MySQL prepare error: " . mysqli_error($conn));
            }

            mysqli_stmt_bind_param($stmt, "s", $emailid);

            $response = mysqli_stmt_execute($stmt);

            mysqli_stmt_close($stmt);
            mysqli_close($conn);

            return $response;
        }
    }

    function getAllDonors()
    {

        $conn = connect();

        if($conn)
        {
            $sql = "select *from Donor";          

            $response = mysqli_query($conn, $sql);

            mysqli_close($conn);

            return $response;
        }
    }

    function loginDonor($data)
    {
        $emailid = $data['emailid'];
        $password = $data['password'];

        $conn = connect();

        if($conn)
        {
            $sql = "select *from Donor where emailid=? and password=?";

            $stmt = mysqli_prepare($conn, $sql);

            if ($stmt === false) {
                die("MySQL prepare error: " . mysqli_error($conn));
            }

            mysqli_stmt_bind_param($stmt, "ss", $emailid, $password);

            $response = mysqli_stmt_execute($stmt);

            mysqli_stmt_close($stmt);
            mysqli_close($conn);

            return $response;
        }
    }
?>