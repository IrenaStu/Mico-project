<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
 <!-- Basic -->
 <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Mico</title>
  <?php require "index2.php" ?>
 <?php require "footer.php" ?>
 <?php require "header.php" ?>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- nice select -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />
  <!-- datepicker -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

<body>
    
     <!-- header section strats -->
     <?php echo generateHeader(); ?>
    <!-- end header section -->

    <div class="container">
        <div class="messageinfo">
        <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        
                        $fullName = $_POST["fullname"];
                        $email = $_POST["email"];
                        $Number = (int) $_POST["phonenumber"];
                        
                        

                        
                        echo "Name: " . htmlspecialchars($fullName) . "<br>";
                        echo "Email: " . htmlspecialchars($email) . "<br>";
                        echo "Phone number: " . htmlspecialchars($Number) . "<br>";
                        

                    } else {
                        echo "Form not submitted.";
                    }
                ?>
        </div>
        <div class="pagemain">
            <div class="pageless">
            
                <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        
                        
                        $message= $_POST["message"];
                        

                        
                        
                        echo "" . htmlspecialchars( $message) . "<br>";

                    } else {
                        echo "Form not submitted.";
                    }
                ?>
            </div>
            
          
        </div>
    </div>

    <!-- info section -->
   
  <!-- end info_section -->
  <?php displayfooter(); ?>

  <!-- footer section -->
 
</body>
</html>