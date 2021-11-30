<?php

session_start();

include('connect.php');

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$company_name = $_POST['company_name'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$country = $_POST['country'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$new_user = $_SESSION['new_user'];

if(!$firstname || !$lastname || !$company_name || !$address || !$city || !$state || !$country)
{
    $error = 'You are required to enter all information on this page';
    include('sign_complete.php');
    exit;
}


 $query = "update registration set firstname='$firstname',lastname='$lastname',company='$company_name', address='$address', city = '$city', state = '$state', country = '$country' where email = '$new_user'";

$result = mysqli_query($conn,$query);

if($result)
{
    $_SESSION['new_user'] = $email;
    $_SESSION['new_user_phone'] = $phone;
    header("Location: sign_complete.php");
    exit;
}
else
{
    {
        $error = 'There is a database error';
        include('sign_complete.php');
        exit;
    
    }
    
}


?>