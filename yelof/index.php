<?php
session_start();
include "db_con.php";
if(isset($_POST['SUBMIT'])){
   $name= mysqli_real_escape_string($con, $_POST['name']);

   $email=mysqli_real_escape_string($con,$_POST['email']);

   $emailquery = "SELECT * FROM email where email = '$email'";
   $query = mysqli_query($con , $emailquery);

   $emailcount =mysqli_num_rows($query);
   
   

   if($emailcount>0){
   
      echo "email already present please enter vaild email";
    }
    else{
            
             $sql = "INSERT INTO email ( `name` , `email`) 
             VALUES ('$name' , '$email')";
             $iquery = mysqli_query($con , $sql);


             if($con->query($sql) == true){
                
               $_SESSION['email'] = "$email";
              
                      $subject = "Check Email";
                      $body = "Hi , $name Thank you for registrating with us
                      http://localhost/yelof/welcome.php";
                      $headers = "From: kinetic2811@gmail.com";
                      if(mail($email , $subject , $body , $headers)){
                        header("location: welcome.php");
                      }else {
                          echo "email sending failed";
                      }
    
                        
                       die;

                   }
                else{
                    echo "ERROR: $sql <br> $con->error";
                  }
                  $con->close();
                
 
    } 
    

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Send email</title>
</head>
<body>

  <nav class="navbar background h-nav-resp">
    <ul class="nav-list v-class-resp">
        <div class="logo"> <img src="logo[578].jpeg" alt="logo">
          <p class="name">YELOF</p>
        </div>
        <li><a href="index.php">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#contact">Contact Us</a></li>
        <li><a href="#login.php">Login</a></li>
        <li><a href="#signup.php">Sign Up</a></li>
    </ul>
</nav>

<section class="background firstSection">
        <div class="Login-box">
           <h1>
             Send Mail
           </h1>
  <form method="POST" action=""  >          
           <div class="textbox">
            
                 <input type="text" placeholder="Please enter your name..." name="name" value="" required >
            </div>
         <div class="textbox">
              <input type="email" placeholder="Please enter your email..." name="email" value="" required >
         </div>

          <button class="btn" name = "SUBMIT" type="submit">Send email</button>
           
  
             
        </div>
</form>
        
    
</section>
<footer>
    <p class="text-footer">
        Copyright &copy; 2021- All rights reserved|
        Design and development Ravi singh.
    </p>
</footer>
   
</body>
</html>