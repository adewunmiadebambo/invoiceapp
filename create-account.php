<?php

session_start();

include('connect.php');

$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$confirm = $_POST['confirm'];

if(!$email || !$phone || !$password || !$confirm)
{
    $error = 'You are required to enter all information on this page';
    include('signup.php');
    exit;
}


if($password != $confirm)
{
    $error = 'Your password and confirmation should be the same';
    include('signup.php');
    exit;

}

$query = "insert into registration set email='$email', phone='$phone', password = '$password'";

$result = mysqli_query($conn,$query);

if($result)
{
    $_SESSION['new_user'] = $email;
    $_SESSION['new_user_phone'] = $phone;
    header("Location: setup.php");
    exit;
}
else
{
    {
        $error = 'There is a database error';
        include('signup.php');
        exit;
    
    }
    
}


?>