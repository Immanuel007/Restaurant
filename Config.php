<?php

#Create a database Connection
$connect  =  mysqli_connect('localhost','root', '', 'anita');

#Check if connection is working
if(!$connect){
    die("Connection failed".mysqli_connect_error());
}
else{
    // echo ("Connection Successful");
}
?>