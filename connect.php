<?php

$conn = mysqli_connect('localhost', 'invoice_db', 'certification231', 'invoice_db');

if(!$conn)
{
    echo 'Cannot Connect to Database';
    exit;
}

?>