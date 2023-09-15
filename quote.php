<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $cargoLoad = $_POST["cargo-load"];
    $collectionDate = $_POST["collection-date"];
    $source = $_POST["source"];
    $userEmail = $_POST["user-email"];
    $destination = $_POST["destination"];
   

   

    
    $to = "sayyedataki@gmail.com"; 
    $subject = "Quote Request from Your Website";
    $message = "Cargo Load: $cargoLoad tonnes\n";
    $message .= "Pick-up Date: $collectionDate\n";
    $message .= "Origin: $source\n";
    $message .= "Destination: $destination\n";
    $message .= "From: $userEmail\n";

   
   
    $headers = "From: $userEmail"; 

if (mail($to, $subject, $message, $headers)) {
    header("location:search.php?success");
    
} else {

    header('location:search.php?error');
    
}

}
?>
