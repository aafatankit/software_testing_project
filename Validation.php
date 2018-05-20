<?php

include 'configure.php';

$emailID = mysqli_real_escape_string($con,$_POST['email']);
$voterID = mysqli_real_escape_string($con,$_POST['userid']);
$password = mysqli_real_escape_string($con,$_POST['userpswd']);


$q = "select * from Voter where emailId = '$emailID' && voterId = '$voterID' && password ='$password'";


$result = mysqli_query($con,$q);
if (!$result) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
}
$row = mysqli_fetch_array($result);
//$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
//$active = $row['active'];

$num = mysqli_num_rows($result);
if($num == 1)
{
    $_SESSION['votername'] = $row['voterName'] ;
    $_SESSION['voterId'] = $row['vId'] ;
    header('location:user.php');
}
else 
{   
    $_SESSION['error'] = "INVALID LOGIN CREDENTIALS.......LOGIN AGAIN!!!!";
    header('location:login.php');
}
    
