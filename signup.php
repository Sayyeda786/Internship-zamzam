<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="main.css?v=<?php echo time(); ?>">
    
</head>
<body>
    <?php


$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];
$number = $_POST['number'];


$conn = new mysqli('localhost', 'root', '', 'zamzam-acc');

if($conn->connect_error) {
    die('Failed to connect: '. $conn->connect_error);

} else{
    $stmt = $conn->prepare("insert into register(fname, lname, email, password, number) values (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssi", $fname, $lname, $email, $password, $number);
    $stmt->execute();
    echo "
             <p class=\"s\">Registration Successful</p>
             <p class=\"s\">Your details has been successfully submitted!</p>
             <br>
             <a href=\"register.php\"><button>Login Now</button>
             </div>";
    
    
    $stmt->close();
    $conn->close();
    
}
?>

</body>
</html>