<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="main.css?v=<?php echo time(); ?>" >
</head>
<body>
    <header class="main-head">
        <div class="nav-logo">
           <div class="logo">
              <img src="images/logo6.png" alt="">
           </div>
        <nav class="nav">
            <ul>
                <li><a class="nav-link"  href="index.php">HOME</a></li>
                
                <li><a class="nav-link" href="contact1.php">CONTACT</a></li>
                <li><a class="nav-link" href="service.php">SERVICES</a></li>
                <li><a class="nav-link" href="search.php">PRODUCTS</a></li>
                <li><a class="nav-link" href="register.php">ACCOUNT</a></li>
            </ul>
        </nav>
        </div>

        <br>
        <br>
        <br>
        <br>
        <div class="h1-main">
            <h1 class="h1-animation">Welcome to ZamZam Road Haulage Registration!</h1>
            <h2>Join the ZamZam logistics revolution and experience seamless transportation solutions.</h2>
            
        </div>

       
        
   

      

    </header>


    <form action="signup.php" method="post" class="form2">
        <p class="s"> Register </p>
        <p class="t"> Your Details</p>
        
          
        
          <div class="account">
            <label for="fname"><b>First Name</b></label>
            <br>
            <input type="text" placeholder="Enter your First Name " name="fname" class="mob" required>
            <br>
        
            

            <label for="lname"><b>Last Name</b></label>
            <br>
            <input type="text" placeholder="Enter your Last Name" name="lname" class="mob" required>

            <br>

            <label for="email"><b>Email Address</b></label>
            <br>
            <input type="email" placeholder="Enter your email" name="email" class="label2" required>
            <br>

            <label for="number"><b>Telephone</b></label>
            <br>
            <input type="number" placeholder="Enter your telephone number" name="number" required>
            <br>


            <label for="password"><b>Password</b></label>
            <br>
            <input type="password" placeholder="Enter your Password" name="password" required>
            <br>
        
            <button type="submit">Register</button>
            <br>
            
          </div>
        
         
        </form>
  

