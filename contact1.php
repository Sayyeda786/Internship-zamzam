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
            <h1 class="h1-animation">Reach Out To Us</h1>
            <h2>We're Eager to Hear from You and Here to Assist You with Any Questions!</h2>
        </div>
       

      

    </header>
    

    <div class="form">
        <form action="contact.php" method="post">

        <?php
    $comment="";
    if(isset($_GET['error'])){
        $comment = "Please fill in all the required fields";
        echo '<div class="alert-err">'.$comment.'</div>';

    }

    if(isset($_GET['success'])){
        $comment = "Your Feedback has been sent";
        echo '<div class="alert-succ">'.$comment.'</div>';

    }
    ?>
      
          <label class="label" for="firstname">First Name</label>
          <input  type="text" name="firstname" placeholder="Your name.." class="mobile1">
      
          <label class="label" for="lastname">Last Name</label>
          <input class="mobile1" type="text" name="lastname" placeholder="Your last name..">

          <label class="label" for="mail">Email</label>
          <input class="mobile1" type="text" name="mail" placeholder="Your e-mail...">
      
          <label class="label" for="country">Country</label>
          <select class="mobile2" name="country">
            <option value="tanzania">Tanzania</option>
            <option value="kenya">Kenya</option>
            <option value="kenya">Rwanda</option>
            <option value="kenya">Burundi</option>
            <option value="other">Zambia</option>
            <option value="kenya">Malawi</option>
            <option value="kenya">Mozambique</option>
            <option value="kenya">DRC</option>
            

          </select>
      
          <label class="label" for="comment">Comments</label>
          <textarea name="comment" class="mobile"  placeholder="Write something.."></textarea>
      
          
          <button class="btn2"name="submit"> Submit </button>
      
        </form>
      </div>
      <footer>
        <div class="footer-container">
            
            
            <div class="content">
                <div class="footer-links">
                   
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="service.php">Services</a></li>
                        <li><a href="search.php">Products</a></li>
                        <li><a href="register.php">Account</a></li>
                        <li><a href="contact1.php">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-contact">
                    
                    <h3>Contact Us</h3>
                    <ul>
                        <li>Email: hasnain@zamzam.co.tz</li>
                        <li>Phone: +255 784 606 177</li>
                        <li>Address: 27A, Kurasini Road, Dar Es Salaam, Tanzania</li>
                        

                       
                    </ul>
                    
                </div>
                <div class="footer-social">
                   
                    <h3>Follow Us</h3>
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div>
               
                <h1 class="footer-h1">ZamZam Road Haulage</h1>
                </div>
        </div>
    </footer>
</body>
</html>