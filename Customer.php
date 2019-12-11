<?php 
include 'config.php';
session_start();
if(!isset($_SESSION['user'])) {
    echo "<script>location.href='index.php'</script>";
    die();
}

$reqid = '';
$proforma = '';
if(isset($_POST['navbtnplace2'])) {
                    $proforma=$_POST['navbtnplace2'];
                      
}
    if (isset($_COOKIE['bcookie']))
$reqid = $_COOKIE['bcookie'];


$query = "UPDATE requests SET division = '$proforma' WHERE rcode='$reqid';";
    $result = mysqli_query($connection, $query);

setcookie('ccookie', $reqid);

    ?>
    


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="PageStyles.css">
    <title>START</title>
</head>

<body>
   
   <div class="headingtext">
   <img src="intermetal.svg" alt="LOGO" class="logo" height="60px" width="170px" />
   <h1>WELCOME</h1>
   </div>  
  
   <hr>
   <p class="pgtxt">Are you a new customer?</p>
   <hr>
    
   <div class="flexbox-container">
      
      <div class="flexbox-item flexbox-item-1">
        <a href="NewCustomer.php" class="btn btn-primary " id="bt1" role="button" aria-pressed="true">New Customer</a>
        <hr>
      </div>
      
      <div class="flexbox-item flexbox-item-2">
        <a href="OldCustomer.php" class="btn btn-primary"  id="bt2" role="button" aria-pressed="true">Existing Customer</a>
        <hr>
      </div>
      
   </div>
</body>
</html>