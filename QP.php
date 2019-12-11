<?php

include 'config.php';

session_start();
if(!isset($_SESSION['user'])) {
    echo "<script>location.href='index.php'</script>";
    die();
}

/*$reqid = '';

if(isset($_POST['reqq'])) {
    $reqid = $_POST['ReqID'];
    $query = "insert into requests (rcode) values ('$reqid')";
    $result = mysqli_query($connection, $query);
    setcookie('acookie', $reqid);
} */

$reqid = '';
$q = 'select rcode from requests';
$r = mysqli_query($connection, $q);
$c = mysqli_num_rows($r);
$c = $c + 1;
$c = (string)$c;
$month = date('m');
$year = date('Y');
$reqid = $year.$month."-".$c;
$query = "insert into requests (rcode) values ('$reqid')";
$result = mysqli_query($connection, $query);
setcookie('acookie', $reqid);






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
  <p class="pgtxt">Choose the type of request</p>
  <hr>
 
  <div class="flexbox-container">
    
     <div class="flexbox-item flexbox-item-1">
     <form  action="Division.php" method="POST">
      <input type="submit"  class="btn btn-primary " id="bt1" role="button" aria-pressed="true" name="navbtnplace"  value="Proforma" >
     </form>
      <hr>
     </div>
      
     <div class="flexbox-item flexbox-item-2">
     <form  action="Division.php" method="POST">
      <input type="submit"  class="btn btn-primary"  id="bt2" role="button" aria-pressed="true" name="navbtnplace" value="Quotation" >
     </form>
      <hr>
     </div>
     
   </div>

</body>
</html>