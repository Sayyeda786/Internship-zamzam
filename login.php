<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="main.css">
</head>
<body>
<?php

$email = $_POST['email'];
$password = $_POST['password'];


$con = new mysqli("localhost", "root", "", "zamzam-acc");

if($con->connect_error) {
    die("Failed to connect: ". $con->connect_error);

} else{
    $stmt = $con->prepare("select * from register where email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if($stmt_result->num_rows > 0) {

        $date = $stmt_result->fetch_assoc();
        $fname = $date['fname'];

        if($date['password'] == $password){
            echo "<header class=\"main-head\"/>
            <div class=\"nav-logo\">
               <div class=\"logo\">
                  <img src=\"images/logo6.png\" alt=\"\">
               </div>
            <nav class=\"nav\">
                <ul>
                    <li><a class=\"nav-link\"  href=\"index.html\">HOME</a></li>
                    
                    <li><a class=\"nav-link\" href=\"contact.html\">CONTACT</a></li>
                    <li><a class=\"nav-link\" href=\"service.html\">SERVICES</a></li>
                    <li><a class=\"nav-link\" href=\"search.html\">PRODUCTS</a></li>
                    <li><a class=\"nav-link\" href=\"register.html\">ACCOUNT</a></li>
                </ul>
            </nav>
            </div>
    
            <br>
            <br>
            <br>
            <br>
            <div class=\"h1-main\">
                <h1 class=\"h1-animation\"> Welcome $fname </h1>
                <h2>Enhance Efficiency and Precision with Our Reliable Transport Solutions</h2>
            </div>
           
    
          
    
        </header>";
    

           
           
        } else{

            echo "
            <header class=\"main-head\"/>
            <div class=\"nav-logo\">
               <div class=\"logo\">
                  <img src=\"images/logo6.png\" alt=\"\">
               </div>
            <nav class=\"nav\">
                <ul>
                    <li><a class=\"nav-link\"  href=\"index.html\">HOME</a></li>
                    
                    <li><a class=\"nav-link\" href=\"contact.html\">CONTACT</a></li>
                    <li><a class=\"nav-link\" href=\"service.html\">SERVICES</a></li>
                    <li><a class=\"nav-link\" href=\"search.html\">PRODUCTS</a></li>
                    <li><a class=\"nav-link\" href=\"register.html\">ACCOUNT</a></li>
                </ul>
            </nav>
            </div>
    
            <br>
            <br>
            <br>
            <br>
            <div class=\"h1-main\">
                <h1 class=\"h1-animation\"> Log In Unsuccessful! </h1>
                
            </div>
           
    
          
    
        </header>
     
            
            <br>
            <br>
            <br>
            <br>
            
            <p class=\"s\">Sorry, the username or password you entered is incorrect. Please double-check your login credentials and try again. If you've forgotten your password, you can click the 'Forgot Password' link below to reset it</p>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            


            <a href=\"password-reset.php\"><button>Forgot Password?</button>
            ";
        
    
        
        }
    } else{
        echo "
        <header class=\"main-head\"/>
        <div class=\"nav-logo\">
           <div class=\"logo\">
              <img src=\"images/logo6.png\" alt=\"\">
           </div>
        <nav class=\"nav\">
            <ul>
                <li><a class=\"nav-link\"  href=\"index.html\">HOME</a></li>
                
                <li><a class=\"nav-link\" href=\"contact.html\">CONTACT</a></li>
                <li><a class=\"nav-link\" href=\"service.html\">SERVICES</a></li>
                <li><a class=\"nav-link\" href=\"search.html\">PRODUCTS</a></li>
                <li><a class=\"nav-link\" href=\"register.html\">ACCOUNT</a></li>
            </ul>
        </nav>
        </div>

        <br>
        <br>
        <br>
        <br>
        <div class=\"h1-main\">
            <h1 class=\"h1-animation\"> Log In Unsuccessful! </h1>
            
        </div>
       

      

    </header>
 
        
        <br>
        <br>
        <br>
        <br>
        
        <p class=\"s\">Sorry, the username or password you entered is incorrect. Please double-check your login credentials and try again. If you've forgotten your password, you can click the 'Forgot Password' link below to reset it</p>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        


        <a href=\"password-reset.php\"><button>Forgot Password?</button>
        <br>
        <br>
        <br>
        <br>
        "
        ;
    
        
    }
}

echo '<script type="text/javascript">
        let popup = document.getElementById("popup");

        function openPopup(){
            popup.classList.add("open-popup");

        }

        function closePopup(){
            popup.classList.remove("open-popup");
            
        }
    </script>';
?>
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



