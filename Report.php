<?php

include 'config.php';

session_start();
if(!isset($_SESSION['user'])) {
    echo "<script>location.href='index.php'</script>";
    die();
}


$reqid = '';

if (isset($_COOKIE['ccookie']))
$reqid = $_COOKIE['ccookie'];


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
  <p class="pgtxt">Quotation Request</p>
  <hr>

 <div id="repdet">
  
   <?php

mysqli_set_charset($connection, 'utf8mb4');
$query = "select * from requests where rcode= '$reqid'";
$result = mysqli_query($connection, $query);

while($row = mysqli_fetch_assoc($result)) {
$rcode = "<b>Request ID :</b> ".$row['rcode'];
$date = "<b>Date & Time :</b> ".$row['date_time'];
$rtype = "<b>Request Type :</b> ".$row['rtype'];
$division = "<b>Division :</b> ".$row['division'];
$cid = "<b>Customer ID:</b> ".$row['cid'];
    
    
    $reqarray = array("$rcode","$date","$rtype","$division",$cid);
    for($i=0;$i<5;$i++) {
      
        if($i==3) 
             echo "<br><br>".$reqarray[$i]."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
        else
            echo $reqarray[$i]."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
        
            
    }    
}
    ?>
</div>
<hr>
     
  <div class="table-responsive" id="rtab" >
     <table class="table table-striped table-bordered" id="rtab2">
      <tr id="headrow">
       <th>Image</th>
       <th>Description</th>
       <th>Quantity</th>
       <th>Price</th>
       <th>Value</th>
      </tr>

<?php

mysqli_set_charset($connection, 'utf8mb4');
$queryy = "select distinct icode, quantity, price, Item_Name from cart,reqm where rcode = '$reqid' and cart.icode = reqm.Item_Code";
$results = mysqli_query($connection, $queryy);
         
while($row = mysqli_fetch_assoc($results)) {
    

    $icode = $row['icode'];
    $qty = $row['quantity'];
    $price = $row['price'];
    $iname = $row['Item_Name'];
    
    $num="media/".$icode.'.png';
	
    echo "<tr><td>";
	echo '<img style="width:200px;" src="'.$num.'" alt="random image" />'."</td>";
    echo "<td><b>Item Code:</b> ".$icode."<br>";
    echo "<b>Item Name:</b> ".$iname."<br>";

    $q = "select * from reqm where Item_Code = '$icode'";
    $r = mysqli_query($connection, $q);
    while($rowIn = mysqli_fetch_assoc($r)) {
        echo "<b>".$rowIn['Type']."</b> ";
        echo $rowIn['Description']."<br>";
    }
    
    echo "</td>";
    
    echo "<td>".$qty."</td><br>";
    echo "<td>".$price."</td>";
    
    $v1=(float)$price;
    $v2=(float)$qty;
    echo "<td>".$v1*$v2."</td><tr>";
    /*echo $row['Type']."<br>";
    echo $row['Description']."<br>";*/
}    
?> 
 </table>
    </div>                  
   
<button id="logout" style="margin-bottom:20px;"  onclick="window.location.href='/QuotationRequest/logout.php'">Log Out</button>
</body>
</html>




