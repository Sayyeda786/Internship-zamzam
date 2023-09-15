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
            <h1 class="h1-animation">BOOK YOUR CARGO TRANSPORT</h1>
            <h2>Safe, Secure, and Timely Deliveries.</h2>
        </div>
       

      

    </header>


    <div class="form">
        <form action="quote.php" method="post">

        <?php
    $comment="";
    if(isset($_GET['error'])){
        $comment = "Please fill in all the required fields";
        echo '<div class="alert-err">'.$comment.'</div>';

    }

    if(isset($_GET['success'])){
        $comment = "Your quote request has been received. We will promptly respond to your inquiry.";
        echo '<div class="alert-succ">'.$comment.'</div>';

    }
    ?>


        
            <label for="cargo-load">Cargo Load (tonnes):</label>
            <br>
            <br>
            <input type="number" class="label1" name="cargo-load" required>

            <br>
            <br>
            
            <label for="collection-date">Collection Date:</label>
            <input type="date"  name="collection-date" required>
            <br>
            <br>

            <label for="source">Place Of Origin:</label>
            <br>
            <input class="label1" type="text"  name="source" list="source-list" placeholder="Enter Place of Origin" required>
            <datalist id="source-list">
             <option value="Tanzania">
             <option value="Kenya">
             <option value="Rwanda">
             <option value="Burundi">
             <option value="Zambia">
             <option value="Malawi">
             <option value="Mozambique">
             <option value="DRC">
             </datalist>

             <br>
             <br>
             <label for="destination">Final Location:</label>
             <br>
            <input class="label1" type="text"  name="destination" list="destination-list" placeholder="Enter Your Final Location" required>
            <datalist id="destination-list">
             <option value="Tanzania">
             <option value="Kenya">
             <option value="Rwanda">
             <option value="Burundi">
             <option value="Zambia">
             <option value="Malawi">
             <option value="Mozambique">
             <option value="DRC">
             </datalist>
             
             <br>

             <label for="user-email">Your Email:</label>
            <input type="email" name="user-email" required>




           
            
            
            
           
            
             <button class="btn2"name="submit"> Request For Quota </button>
        </form>
    </section
       