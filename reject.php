<?php
include 'connection.php';

$man_id= $_GET['man_id'];

$manrecords=" INSERT INTO Products(product_id,product_name,product_price,product_desc) SELECT man_id,man_name,man_price,man_desc FROM remanufature where man_id='$man_id'";
$results=mysqli_query($conn,$manrecords);

$src= "DELETE FROM remanufature WHERE man_id='$man_id'";
$Dquery= mysqli_query($conn,$src);


$queryman=" SELECT * FROM remanufature ";
$record= mysqli_query($conn,$queryman);

if($row2=mysqli_fetch_array($record)){
    $results;
    $Dquery;
    
}
echo "<script> 
alert('Item Added!');
window.location.href='Remanufacture.php';</script>";


?>