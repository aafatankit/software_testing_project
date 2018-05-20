<?php

include 'configure.php';
$vid = $_SESSION['voterId'];
$vq = "Select * from Voter where vId = $vid";
$result = mysqli_query($con,$vq);
if (!$result) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
}
$row = mysqli_fetch_array($result);

if($row['voteId']== NULL)
{
            
            $voter = $_SESSION['voterId'];
            $candidate = $_POST['cId'];
            $inc = "update Candidate Set voteCount = voteCount + 1 where cId = $candidate ";
            $voteId = "update Voter Set voteId = $candidate where vId = $voter ";
            mysqli_query($con,$inc);
            mysqli_query($con,$voteId);
            echo "Voted Successfully";
}
else 
    echo "You have Already Voted !!!!";

?>