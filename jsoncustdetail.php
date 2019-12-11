<?php
include 'config.php';


$idvalue = $_POST['value'];
$q = "select * from customerdetails where Name = '$idvalue'";
$r = mysqli_query($connection, $q);
$data = mysqli_fetch_array($r);
echo json_encode($data);

/*
$q = "select * from customerdetails where ID = '123'";
$r = mysqli_query($connection, $q);
$data = mysqli_fetch_array($r);
echo json_encode($data);*/
?>