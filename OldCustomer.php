
<?php
include 'config.php';

session_start();
if(!isset($_SESSION['user'])) {
    echo "<script>location.href='index.php'</script>";
    die();
}

$qsearch = "select * from customerdetails";
$result2 = mysqli_query($connection, $qsearch);
 
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="bootstrap.min.css" />
  
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
      <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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
            <input type ="text" class="form-control" list='CustomerList' name='CustomerName' id = 'CustomerName'>
            <form method="post">
             <button type="button" class="btn btn-primary" data-toggle="modal" onclick="fetch();" id="ocus">
                        ...
             </button></form>
             <!--<input type="text" class="form-control" name="CustomerName"  autocomplete="off">-->
                   
                     <?php 
         
         echo "<datalist id='CustomerList' >";
        echo "<option value= ''>";
         while($row1 = mysqli_fetch_assoc($result2)) {
         
             
    echo "<option value='".$row1['Name']."'>";
    
               
         }
         echo "</datalist>";
             
             ?>
             
             <span id="error_icode" class="text-danger"></span>
            </div>
              
               
            <div class="input-group form-group col">
              <div class="input-group-prepend">
                <span class="input-group-text">Customer ID</span> 
              </div>
             <input type="text" class="form-control" name="CustomerID" id="custid"  autocomplete="off">
             
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
             <input type="text" class="form-control" name="P_O_Box" id="po"  autocomplete="off">
            </div>
                               
            <div class="input-group form-group col">
              <div class="input-group-prepend">
                <span class="input-group-text">City</span> 
              </div>
             <input type="text" class="form-control" name="City" id="city" autocomplete="off">
            </div> 
                                
            <div class="input-group form-group col">
              <div class="input-group-prepend">
                <span class="input-group-text">Country</span> 
              </div>
             <input type="text" class="form-control" name="Country" id="country" autocomplete="off">
            </div>
                               
                               
            <div class="input-group form-group col">
              <div class="input-group-prepend">
                <span class="input-group-text">Email</span> 
              </div>
             <input type="email" class="form-control" name="Email" id="email" autocomplete="off">
            </div>
                               
                               
            <div class="input-group form-group col">
              <div class="input-group-prepend">
                <span class="input-group-text">Ref No</span> 
              </div>
             <input type="text" class="form-control" name="Ref_No" id="ref" autocomplete="off">
            </div>
                               
                               
            <div class="input-group form-group col">
              <div class="input-group-prepend">
                <span class="input-group-text">Attention</span> 
              </div>
             <input type="text" class="form-control" name="Attention" id="attn" autocomplete="off">
            </div>
                               
            <div class="input-group form-group col">
              <div class="input-group-prepend">
                <span class="input-group-text">Telephone</span> 
              </div>
             <input type="text" class="form-control" name="Telephone" id="tel" autocomplete="off">
            </div>
                               
            <div class="input-group form-group col">
              <div class="input-group-prepend">
                <span class="input-group-text">Fax</span> 
              </div>
             <input type="text" class="form-control" name="Fax" id="fax" autocomplete="off">
            </div>
                               
            <div class="input-group form-group col">
              <div class="input-group-prepend">
                <span class="input-group-text">Currency</span> 
              </div>
             <input type="text" class="form-control" name="Currency" id="cur" autocomplete="off">
            </div>
                               
            <div class="input-group form-group col">
              <input type="submit" class="form-control" name="submitdet" value="Save & Proceed To Products" id="submitbutton">
              <hr>
            </div>
         </div>
      </div>
   </form>
 </div>
 
   
  

   
<script>
function fetch() {
    var idValue = $('#CustomerName').val();
    
    $.post('jsoncustdetail.php', { value: idValue }, 
        function(data){
            var data = JSON.parse(data);
            //console.log(data);
            id= data['ID'];
            pobox = data['PO_Box'];
            city = data['City'];
            country = data['Country'];
            email = data['Email'];
            refno = data['Ref_No'];
            attn = data['Attention'];
            tel = data['Telephone'];
            fax = data['Fax'];
            cur = data['Currency'];
            document.getElementById('custid').value=id;
            document.getElementById('po').value=pobox;
            document.getElementById('city').value=city;
            document.getElementById('country').value=country;
            document.getElementById('email').value=email;
            document.getElementById('ref').value=refno;
            document.getElementById('attn').value=attn;
            document.getElementById('tel').value=tel;
            document.getElementById('fax').value=fax;
            document.getElementById('cur').value=cur;
        })
}    
</script>


<?php

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
    
    echo "<script>window.location.href='Products.php'</script>";
    
    
    
    
}
?> 
 
</body>
</html>