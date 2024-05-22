<?php  
include 'connection.php';

$ID= $_GET['product_id']; 

$sql= "delete from Products where product_id='$ID'";
$query= mysqli_query($conn,$sql);

if($query){
    
    echo "<script> 
    alert('Item Deleted!');
    window.location.href='displayproducts.php';</script>";

}else{
    
    echo "<script> alert('Something went wrong!') </script>";
}

?>