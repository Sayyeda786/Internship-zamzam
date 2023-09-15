<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            <h1 class="h1-animation">MY ACCOUNT</h1>
            
        </div>

       
        
   

      

    </header>


    
    <form action="login.php" method="post" class="form1">
      <p class="s"> Existing Customers </p>
      
        
      
        <div class="account">
          <label for="email"><b>Email</b></label>
          <br>
          <input type="email" placeholder="Enter your email" name="email" required>
          <br>
      
          <label for="password"><b>Password</b></label>
          <br>
          <input type="password" placeholder="Enter Password" name="password" required>
          
      
          <button type="submit" onclick="openPopup()">Sign In</button>
          <br>
          <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
         </label>
        </div>
      
        <div class="account" style="background-color:#8baeb748">
          <button type="button" class="cancel">Cancel</button>
          <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
      </form>

      <form action="signup1.php" method="post">

      <div class="register">
        <p class="f"> New to ZamZam? </p>
        
        

          
        <p class="text">
          Receive personalized recommendations for the best logistics solutions.
          Tailor your ZamZam experience on mobile, tablet, and desktop.
          Effortlessly manage your shipments and preferences.
          Access your saved routes and transportation options.
          Create and share shipping lists with ease.



        </p>
        <button type="submit" class="but">Register for an account</button>


        </div>

      </form>

      <script>
        let popup = document.getElementById("popup");

        function openPopup(){
            popup.classList.add("open-popup");

        }

        function closePopup(){
            popup.classList.remove("open-popup");
            
        }
    </script>
    
</body>
</html>




    
    




    