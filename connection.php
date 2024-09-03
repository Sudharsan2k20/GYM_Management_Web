<?php

$conn = new mysqli("localhost", "root", "", "gym_management");

if($conn->connect_error){
    die("Connection error");
}
else{
    echo "Connected";
}