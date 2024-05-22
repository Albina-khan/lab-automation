<?php include 'links.php'; ?>

<div class="container-fluid">
    <h1 style="text-align:center" ;> <i> Testings  </i></h1>
    <div class="card shadow mb-4">

        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Product List<a href="addProduct.php"> <button
                        style="float:right" ;> ADD NEW </button> </a> </h6>

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
                            <th>Approval</th>
                            <th colspan=2 style="text-align:center;">Actions</th>
                        </tr>
                    </thead>


                    <tbody>

                        <?php

                        include 'connection.php';

                        $print = " SELECT * FROM Products ";

                        $Query = mysqli_query($conn, $print);

                        while ($row = mysqli_fetch_array($Query)) {

                            ?>
                            <tr>
                                <td>
                                    <?php echo $row['product_id'] ?>
                                </td>
                                <td>
                                    <?php echo $row['product_name'] ?>
                                </td>
                                <td>
                                    <?php echo $row['product_price'] ?>
                                </td>
                                <td>
                                    <?php echo $row['product_desc'] ?>
                                </td>
                                <td>
                                        <input type="checkbox" name="checkbtn" id="">

                                </td>
                                <td>
                                    <a href="delete.php?product_id=<?php echo $row['product_id']?>">Delete</a>
                                </td>
                                <td>
                                    <a href="Edit.php?product_id=<?php echo $row['product_id']?>">Edit</a>
                                </td>
                            </tr>
                        <?php } ?>
                        <div class="container-fluid">
 


                    </tbody>
                </table>

   

            </div>
        </div>
    </div>
    
        <nav class="navbar navbar-light bg-light">
      <div class="container-fluid">
        <form class="d-flex" method="post" enctype="multipart/form-data">

          <input class="form-control me-2"  name="cpriSearch" type="search" placeholder="Search ID" aria-label="Search">
          
          <button class="btn btn-outline-success" name="cpriBtn" type="Submit">sent to CPRI</button>
        </form>
      </div>
    </nav>
</div>


<?php 

include 'connection.php';





$pid= " SELECT product_id  from products ";
$cpriQ= mysqli_query($conn,$pid);


if (isset($_POST['cpriBtn'])){
    
    $search= $_POST['cpriSearch'];

    $Crecord=" INSERT INTO cpri(cpri_id,P_name,p_price,p_des) SELECT product_id,product_name,product_price,product_desc FROM Products where product_id='$search'";
    $record=mysqli_query($conn,$Crecord);


    $src= "DELETE FROM Products WHERE product_id='$search'";
    $Dquery= mysqli_query($conn,$src);
    
    if($search=$cpriQ){
        echo "<script> window.location.href='cpri.php'</script>";
        $record;
        $Dquery;
    }
    
    else{
        echo "<script>alert('Something went wrong!')</script>";
    }
    

}


?>