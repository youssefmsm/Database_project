<?php
$con=new mysqli('localhost','root','','car_app');
if(!$con){
    die(mysqli_error($con));
}