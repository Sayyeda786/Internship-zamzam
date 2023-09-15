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
    <h1 class=\"h1-animation\"> Reset Your Password </h1>
    
</div>




</header>"
?>

<main>
    <div class="wrapper-main">
        <section class="section-default">
            
            <p class="s"> An email will be sent to you with instruction on how to reset your password.</p>
            <br>
            <br>
            <form action="reset-request.php" method="POST">
                <input type="text" name="email" placeholder="Enter your email address...">
                <button type="submit" name="reset-request-submit"> Receive new password by email</button>
            </form>


        </section>


    </div>


</main>