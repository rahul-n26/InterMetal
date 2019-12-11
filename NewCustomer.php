
<?php

session_start();
if(!isset($_SESSION['user'])) {
    echo "<script>location.href='index.php'</script>";
    die();
}

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
  <h1>CUSTOMER FORM</h1>
  </div>  
  
  <div class="container">
    <form action="#" method="post"> 
      <div class="card mb-3">
        <div class="card-header">DETAILS</div>
          <div class="card-body">
                           
            <div class="input-group form-group col">
              <div class="input-group-prepend">
                <span class="input-group-text">Customer Name</span> 
              </div>
             <input type="text" class="form-control" name="CustomerName"  autocomplete="off">
            </div>
             
            <div class="input-group form-group col">
              <div class="input-group-prepend">
                <span class="input-group-text">Customer ID</span> 
              </div>
             <input type="text" class="form-control" name="CustomerID"  autocomplete="off">
            </div>
                            
            <div class="input-group form-group col">
              <div class="input-group-prepend">
                <span class="input-group-text">Payment Terms</span> 
              </div>
             <input type="text" class="form-control" name="Payment_Terms"  autocomplete="off">
            </div>
                                   
            <div class="input-group form-group col">
              <div class="input-group-prepend">
                <span class="input-group-text">Validity</span> 
              </div>
             <input type="text" class="form-control" name="Validity"  autocomplete="off">
            </div>
                                   
            <div class="input-group form-group col">
              <div class="input-group-prepend">
                <span class="input-group-text">Delivery</span> 
              </div>
             <input type="date" class="form-control" name="Delivery"  autocomplete="off">
            </div>
                               
            <div class="input-group form-group col">
              <div class="input-group-prepend">
                <span class="input-group-text">P O Box</span> 
              </div>
             <input type="text" class="form-control" name="P_O_Box" autocomplete="off">
            </div>
                               
            <div class="input-group form-group col">
              <div class="input-group-prepend">
                <span class="input-group-text">City</span> 
              </div>
             <input type="text" class="form-control" name="City" autocomplete="off">
            </div>
                                
            <div class="input-group form-group col">
              <div class="input-group-prepend">
                <span class="input-group-text">Country</span> 
              </div>
             <input type="text" class="form-control" name="Country" autocomplete="off">
            </div>
                               
                               
            <div class="input-group form-group col">
              <div class="input-group-prepend">
                <span class="input-group-text">Email</span> 
              </div>
             <input type="email" class="form-control" name="Email" autocomplete="off">
            </div>
                               
                               
            <div class="input-group form-group col">
              <div class="input-group-prepend">
                <span class="input-group-text">Ref No</span> 
              </div>
             <input type="text" class="form-control" name="Ref_No" autocomplete="off">
            </div>
                               
                               
            <div class="input-group form-group col">
              <div class="input-group-prepend">
                <span class="input-group-text">Attention</span> 
              </div>
             <input type="text" class="form-control" name="Attention" autocomplete="off">
            </div>
                               
            <div class="input-group form-group col">
              <div class="input-group-prepend">
                <span class="input-group-text">Telephone</span> 
              </div>
             <input type="text" class="form-control" name="Telephone" autocomplete="off">
            </div>
                               
            <div class="input-group form-group col">
              <div class="input-group-prepend">
                <span class="input-group-text">Fax</span> 
              </div>
             <input type="text" class="form-control" name="Fax" autocomplete="off">
            </div>
                               
            <div class="input-group form-group col">
              <div class="input-group-prepend">
                <span class="input-group-text">Currency</span> 
              </div>
             <input type="text" class="form-control" name="Currency" autocomplete="off">
            </div>
                               
            <div class="input-group form-group col">
              <input type="submit" class="form-control" name="submitdet" value="Save & Proceed To Products" id="submitbutton">
              <hr>
            </div>
         </div>
      </div>
   </form>
 </div>
 
<?php
include 'config.php';
$cname = '';    
$id = '';
$payterm = '';
$val = '';
$deliv = '';
$pobox = '';
$city = '';
$country = '';
$email = '';
$refno = '';
$atn = '';
$tel = '';
$fax = '';
$cur = '';
$reqid = '';

if (isset($_COOKIE['ccookie']))
$reqid = $_COOKIE['ccookie'];



    
if(isset($_POST['submitdet'])) {
    $cname = $_POST['CustomerName'];
    $id = $_POST['CustomerID'];
    $payterm = $_POST['Payment_Terms'];
    $val = $_POST['Validity'];
    $deliv = $_POST['Delivery'];
    $pobox = $_POST['P_O_Box'];
    $city = $_POST['City'];
    $country = $_POST['Country'];
    $email = $_POST['Email'];
    $refno = $_POST['Ref_No'];
    $atn = $_POST['Attention'];
    $tel = $_POST['Telephone'];
    $fax = $_POST['Fax'];
    $cur = $_POST['Currency'];
    $query = "insert into customerreq values ('$reqid','$id','$cname','$payterm','$val','$deliv','$pobox','$city','$country','$email','$refno','$atn','$tel','$fax','$cur')";
    $result = mysqli_query($connection, $query);
    
    $queries = "UPDATE requests SET cid = '$id' WHERE rcode='$reqid';";
    $results = mysqli_query($connection, $queries);
    
    $queried = "insert into customerdetails (ID,Name,PO_Box,City,Country,Email,Telephone,Fax,Currency) values ('$id','$cname','$pobox','$city','$country','$email','$tel','$fax','$cur')";
    $rezult = mysqli_query($connection, $queried);
    
    echo "<script>window.location.href='Products.php'</script>";
    
    
    
    
}
?>
  
 
</body>
</html>