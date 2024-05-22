<?php
include 'links.php';

include 'connection.php';

$ID= $_GET['product_id']; 
$sql="select * from Products where product_id = $ID";
$result= mysqli_query($conn,$sql);

while($row= mysqli_fetch_array($result)){


?>
<body class="bg-gradient-primary">

    <div class="container">
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">


                <div class="row">

                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4"> <i> Edit Product </i> </h1>
                            </div>
                            <form class="user" method="post" enctype="multipart/form-data">
                                <div class="form-group p-4">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        name="p_name" placeholder="Product Name" required>
                                </div>
                                <div class="form-group p-4">
                                    <input type="number" name="p_price" class="form-control form-control-user"
                                        id="exampleInputPassword" placeholder="Product price" required>
                                </div>
                                <div class="form-group p-4">
                                    <input type="text" name="p_desc" class="form-control form-control-user"
                                        id="exampleInputPassword" placeholder="Product Description" required>
                                </div>
                                <!-- <div class="form-group p-4">
      <input type="file" name="p_img" class="form-control "
      id="exampleInputPassword"   required>
      </div> -->
                                <button type="submit" name="btn_submit" class="btn btn-primary btn-user btn-block m-4">
                                    SAVE
                                </button>

<?php 

if(isset( $_POST['btn_submit'] )){
    $name = $_POST['p_name'];
    $price = $_POST['p_price'];
    $desc = $_POST['p_desc'];
    
    $update= "update Products set product_name='$name', product_price='$price', product_desc='$desc' where product_id='$ID' ";

$res= mysqli_query($conn,$update );

if($res){


    echo "<script> 
    alert('Item saved!');
    window.location.href='displayproducts.php';</script>";
} 
    
else{
        echo "<script> alert('cant save') </script>";
    }
    }}

?>


                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
