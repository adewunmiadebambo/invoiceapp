<?php
    session_start();

    include('connect.php');

    $valid_user = $_SESSION['new_user'];

    $password = $_POST['password'];
    $newpassword = $_POST['newpassword'];
    $confirm = $_POST['confirm'];


    if(!$password || !$newpassword || !$confirm)
    {
        $error = 'All information is required';
        include('password.php');
        exit;
    }

    if($newpassword != $confirm)
    {
        $error = 'Your new password and confirmation must be the same';
        include('password.php');
        exit;
    }

    $pass_count = strlen($newpassword);

    if($pass_count < 8)
    {
        $error = 'Your new password must be at least 8 characters';
        include('password.php');
        exit;
    }



    $query_p = "select * from registration where email = '$new_user'";
    $result_p = mysqli_query($conn,$query_p);
    $row_p = mysqli_fetch_array($result_p);

    $db_password = $row_p['password'];

    if($password != $db_password)
    {
        $error = 'Your current password is not valid';
        include('password.php');
        exit;   
    }


    $query = "Update registration set password = '$newpassword' where email = '$new_user'";
    $result = mysqli_query($conn,$query);
    if($result)
    {
        $ok = 'Password Changed Successfully';
        include('password.php');
        exit;
    }
    else
    {
        $error = 'There is a database error';
        include('password.php');
        exit;
    }

?>