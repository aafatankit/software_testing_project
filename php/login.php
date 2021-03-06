<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link rel="stylesheet" href="header.css">
        <link rel="stylesheet" href="pages.css">
    </head>
    
    <body>
        <header>
            <div id="head">
                <div id="logo">
                    <img src="images/logo.png">
                </div>
                <div id="links">
                    <div id="home">
                        <a href="index.html">HOME</a>
                    </div>
                    <div id="notices">
                        <a href="notice.html">NOTICES</a>
                    </div>
                    <div id="login">
                        <a href="../php/login.php">LOGIN</a>
                    </div>
                    <div id="results">
                        <a href="results.html">RESULTS</a>
                    </div>
                    <div id="help">
                        <a href="help.html">HELP</a>
                    </div>
                    <div id="about">
                        <a href="aboutus.html">ABOUT US</a>
                    </div>
                </div>
            </div>
        </header>
        
        <!--Page Title-->
        <div class="page-title">
            <h1 class="page-name">LOGIN</h1>
        </div>
        <!--End-->
        
        <div id="login-form">
            <h1 class="page-heading">LOGIN</h1>
            <p class="page-text">HAVING TROUBLE WHILE LOGIN? CLICK <a href="help.html">HERE</a></p>
            <div id="form-input">
                <form action="Validation.php" method="POST">
                   
                     <?php
                          if(isset($_SESSION['error']))
                           echo $_SESSION['error'];
                     ?>
                     <ol>
                        <p>
                            <input type="text" name="email" placeholder="Email ID" id="email">
                        </p>
                        <br>
                        <p>
                            <input type="text" name="userid" placeholder="Unique Voter ID" id="voterid">
                        </p>
                        <br>
                        <p>
                            <input type="password" name="userpswd" placeholder="Password" id="pswd">
                        </p>
                        <br>
                        <p><input type="submit" value="Login" id="data-send"></p>
                    </ol>
                </form>
            </div>
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
            <div id="bottom-links">
                <span id="b_home">
                    <a href="index.html" class="b-link">HOME</a>
                </span>
                <span id="b_notices">
                    <a href="notice.html" class="b-link">NOTICES</a>
                </span>
                <span id="b_login">
                    <a href="../php/login.php" class="b-link">LOGIN</a>
                </span>
                <span id="b_results">
                    <a href="results.html" class="b-link">RESULTS</a>
                </span>
                <span id="b_help">
                    <a href="help.html" class="b-link">HELP</a>
                </span>
                <span id="b_about">
                    <a href="aboutus.html" class="b-link">ABOUT US</a>
                </span>
            </div>
            <div id="copyright">
                <p>Copyright &copy; 2018 Ankit. All rights reserved.</p>
            </div>
        </div>
        <!--End-->
    </body>
</html>

<?php
unset($_SESSION['error']);
?>

