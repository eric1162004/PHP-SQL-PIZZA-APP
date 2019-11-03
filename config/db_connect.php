<?php 

// connect to db
$conn = mysqli_connect('localhost', 'eric', 'test1234', 'order_pizza');

//check connection
if (!$conn){
    echo 'Connection error: ' . mysqli_connect_error();
}

?>