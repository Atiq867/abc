<?php
$con=mysqli_connect('localhost','root','','profile');

if(isset($_POST['submit'])){

    $name=trim(mysqli_real_escape_string($con,$_POST['name']));
    $email=trim(mysqli_real_escape_string($con,$_POST['email']));
    $message=trim(mysqli_real_escape_string($con,$_POST['message']));
    $data="INSERT INTO `info`(`id`,`name`,`email`,`message`) VALUES (null,'$name','$email','$message')";
    $con->query($data);
}

?>