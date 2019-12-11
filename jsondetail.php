<?php
include 'config.php';
$code= $_POST['codeValue'];   


mysqli_set_charset($connection, 'utf8mb4');
$query = "select * from reqm where Item_Code = '$code'";

//$query = "select * from reqm";
$result = mysqli_query($connection, $query);
$array = array();
while($row = mysqli_fetch_assoc($result)) {
    $itemname = $row['Item_Name'];
    $itemcode = $row['Item_Code'];
    array_push($array,$itemname);
    array_push($array,$itemcode);
    break;
    echo $row['Type']."<br>";
    echo $row['Description']."<br>";
    echo "<br><br>";    
}

$query1 = "select Type, Description from reqm where Item_Code = '$code'";
$result1 = mysqli_query($connection, $query1);
while($row1 = mysqli_fetch_assoc($result1)) {
    $type = $row1['Type'];
    $desc = $row1['Description'];
    array_push($array,$type);
    array_push($array,$desc);
}

echo json_encode($array);
?>
