<?php 

$conn = mysqli_connect('localhost', 'lokmans', '12345678', 'ninza_pizza');
//  check the connection
if(!$conn){
    echo 'Connection error:' . mysqli_connect_error();
} 

?>