<div class="container-fluid">
    <h1 style="text-align:center" ;> <i> Release Products </i></h1>
    <div class="card shadow mb-4">

        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Product List<a href="cpri.php"> <button
                        style="float:right" ;> Back to CPRI </button> </a> </h6>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Product Name</th>
                            <th>Product Price</th>
                            <th>Product Description</th>
                            
                        </tr>
                    </thead>

<?php  
include 'links.php';

include 'connection.php';


$id=$_GET['cpri_id'];


$Crecord2=" INSERT INTO releaseProducts(re_id,re_name,re_price,re_desc) SELECT cpri_id,P_name,p_price,p_des FROM cpri where cpri_id='$id'";
$records2=mysqli_query($conn,$Crecord2);


$query=" SELECT * FROM releaseProducts ";
$record= mysqli_query($conn,$query);

$src= "DELETE FROM cpri WHERE cpri_id='$id'";
$Dquery= mysqli_query($conn,$src);

while($row=mysqli_fetch_array($record)){


    if($row){
        $records2;
        $Dquery;
    }else{
        echo "<script>alert('Something went wrong!')</script>";
    }
    
?>

<tr>
                                <td>
                                    <?php echo $row['re_id'] ?>
                                </td>
                                <td>
                                    <?php echo $row['re_name'] ?>
                                </td>
                                <td>
                                    <?php echo $row['re_price'] ?>
                                </td>
                                <td>
                                    <?php echo $row['re_desc'] ?>
                                </td>
</tr>

<?php  }?>