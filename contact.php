<?php





if (isset($_POST['submit'])){
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $mail = $_POST['mail'];
  $comment = $_POST['comment'];
  $country = $_POST['country'];



  
   

    if(empty($firstname) || empty($lastname) || empty($mail) || empty($comment))
    {
      header('location:contact1.php?error');
    }

    else{
      $to = "hasnain@zamzam.co.tz";
      

      if(mail($to,$comment,$mail))
      {
        header("location:contact1.php?success");
      }


      }

    }

    else{
      header("location:contact1.php");

    }





  
?>