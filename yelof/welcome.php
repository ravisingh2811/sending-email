
<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <nav class="navbar background h-nav-resp">
        <ul class="nav-list v-class-resp">
            <div class="logo"> <img src="logo[578].jpeg" alt="logo">
              <p class="name">Excellence</p>
            </div>
            <li><a href="index.php">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#contact">Contact Us</a></li>
            <li><a href="#login.php">Login</a></li>
            <li><a href="#signup.php">Sign Up</a></li>
        </ul>
    </nav>
    <div class="welcome" style = " border: 8px solid whitesmoke;
                                        background: #ecdbdb;
                                        height: 230px;
                                        margin: 50px;
                                        padding-left:35%;
                                        padding-top:50px;
                                        margin-top:30px" >
        <H2>Thank you <br>
        Please check your email<br>
        <?php
          echo $_SESSION["email"];

        ?>
    
        </H2>
    </div>
<footer>
    <p class="text-footer">
        Copyright &copy; 2021- All rights reserved|
        Design and development Ravi singh.
    </p>
</footer>

</body>
</html> 
