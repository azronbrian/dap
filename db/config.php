<?php

// $conn = mysqli_connect('localhost', 'eldohubc_az', 'piYNpZ{3t5Hy', 'eldohubc_test');

$conn = mysqli_connect('localhost', 'root', '', 'dap_db');

if(!$conn){
    echo 'Connection error: ' . mysqli_connect_error();
}

?>

