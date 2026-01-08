<?php
    include('dbConfig.php');

    function addUser($data)
    {
        $emailid = $data['emailid'];
        $name = $data['name'];
        $password = $data['password'];
        $contact = $data['contact'];
        $location = $data['location'];
        $status = $data['status'];

        $conn = connect();

        $sql = "INSERT INTO user (emailid, name, password, contact, location, status) 
            VALUES (?, ?, ?, ?, ?, ?)";

        $stmt = mysqli_prepare($conn, $sql);

        if ($stmt === false) {
            die("MySQL prepare error: " . mysqli_error($conn));
        }

        mysqli_stmt_bind_param($stmt, "ssssss", $emailid, $name, $password, $contact, $location, $status);

        $response = mysqli_stmt_execute($stmt);

        mysqli_stmt_close($stmt);
        mysqli_close($conn);

        return $response;
    }

    function updateUser($data)
    {
        $emailid = $data['emailid'];
        $name = $data['name'];
        $password = $data['password'];
        $contact = $data['contact'];
        $location = $data['location'];
        $status = $data['status'];

        $conn = connect();

        if($conn)
        {
            $sql = "update user set name=?, password=?, contact=?, location=?, status=? where email = ?";

            $stmt = mysqli_prepare($conn, $sql);

            if ($stmt === false) {
                die("MySQL prepare error: " . mysqli_error($conn));
            }

            mysqli_stmt_bind_param($stmt, "ssssss", $name, $password, $contact, $location, $status,$emailid);

            $response = mysqli_stmt_execute($stmt);

            mysqli_stmt_close($stmt);
            mysqli_close($conn);

            return $response;
        }
    }

    function deleteUser($emailid)
    {
        $conn = connect();

        if($conn)
        {
            $sql = "delete from user where emailid = ?";

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

    function getUserDetails($emailid)
    {
        $conn = connect();

        if($conn)
        {
            $sql = "select *from user where emailid=?";

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

    function getAllUsers()
    {

        $conn = connect();

        if($conn)
        {
            $sql = "select *from user";          

            $response = mysqli_query($conn, $sql);

            mysqli_close($conn);

            return $response;
        }
    }

    function loginUser($data)
    {
        $emailid = $data['emailid'];
        $password = $data['password'];

        $conn = connect();

        if($conn)
        {
            $sql = "select *from user where emailid=? and password=?";

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