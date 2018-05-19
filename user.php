<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>ADS Voting</title>
        <link rel="stylesheet" href="header.css">
        <link rel="stylesheet" href="pages.css">
        <link rel="stylesheet" href="bootstrap.css">
        <script src="jquery.js"></script>
        <?php include 'configure.php'?>
    </head>
    
    
    
    
    <body>
        <header>
            <div id="head">
                <div id="logo">
                    <img src="images/logo.png">
                </div>
                <div id="links">
                    <div id="about" style="float: right;">
                        <a href="logout.php">LOGOUT</a>
                    </div>
                </div>
            </div>
        </header>
        
        <!--Page Title-->
        <div class="page-title">
            <h1 class="page-name" id="username">Welcome <?php echo $_SESSION['votername']; ?></h1> 
        </div>
        <!--End-->
        
        
        <div id="about-block">
          
            
            <?php
            
            $cand = "Select * from Candidate";
            $data = mysqli_query($con,$cand);
            if (!$data) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
}

             echo "<table class='table table-striped'>;
                          <tr>
                          <th scope='col'>CANDIDATE ID</th>
                          <th scope='col'>CANDIDATE NAME</th>
                          <th scope='col'></th>
                           </tr>";

            
    echo '<script type="text/javascript">
      function vote(e){
      var id = e.target.id;
      alert(id);
      $.post("incV.php", {cId:id}, function(returned_data){
      console.log(alert(returned_data)); 
      });
      }</script>';        
   
            
    while($record = mysqli_fetch_array($data))
    {
      echo "<tr>";
      $cid = $record['cID'];
      echo "<td>".$record['candidateId']."</td>";
      echo "<td>".$record['name']."</td>"; 
      echo '<td><button type="button" class="btn btn-primary" onclick = "vote(event)" id ="'.$cid.'">VOTE</button></td>';
      echo "</tr>";

    }
          
  echo "</table>";
                ?>
        </div>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        <!--Footer-->
        <div id="footer1">
            <div id="details">
                <h1 id="last-id">AD'S VOTING SYSTEM</h1>
                <br>
                <p >This Voting System is a winter project made by Ankit and Deepak student of IT-1, NSIT under the guidence of Deepak Kumar, Assistant professor at NSIT, IT Department.</p>
                <hr>
                <p>ankitmp3@hotmail.com</p>
                <hr>
                <p>+91 7503649465</p>
                <hr>
                <p>Netaji Subhas Institute Of Technology<br>Azad Hind Fauz Marg, Sector 3, Dwarka, Dwarka Sector-3, Dwarka, New Delhi, Delhi 110078</p>
            </div>
        </div>
        <div id="footer2">
            <div id="copyright">
                <p>Copyright &copy; 2018 Ankit. All rights reserved.</p>
            </div>
        </div>
        <!--End-->
    </body>
</html>