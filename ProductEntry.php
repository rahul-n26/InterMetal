

<?php

include 'config.php';

//$connect = new PDO("mysql:host=localhost;dbname=intermetal", "root", "");

//$connect = new PDO("mysql:host=13.80.109.68;dbname=automation", "kingzusr2", "eqp53678");
//$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



$reqid = '';

if (isset($_COOKIE['ecookie']))
$reqid = $_COOKIE['ecookie'];


  




for($count = 0; $count<count($_POST['hidden_icode']); $count++)
{
 $data = array(
  $i = $_POST['hidden_icode'][$count],     
  $q = $_POST['hidden_quantity'][$count],
  $p = $_POST['hidden_price'][$count]
 );
    
$query = "INSERT INTO cart (rcode,icode, quantity, price) VALUES ('$reqid','$i', '$q','$p' )";
      $result = mysqli_query($connection, $query);
 
}

?>