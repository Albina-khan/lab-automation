<?php include 'links.php'; ?>


<div class="container-fluid">
    <h1 style="text-align:center" ;> <i> CPRI </i></h1>
    <div class="card shadow mb-4">

        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> Product List<a href="displayproducts.php"> <button
                        style="float:right" ;> Back to Testing </button> </a> </h6>

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
                            <th colspan=2 style="text-align:center;">Approval</th>
                        </tr>
                    </thead>


                    <tbody>


                        <?php

                        include 'connection.php';

                        $cpriRecords = "SELECT * from Cpri";
                        $result = mysqli_query($conn, $cpriRecords);


                        while ($row = mysqli_fetch_array($result)) {
                            ?>

                            <tr>
                                <td>
                                    <?php echo $row['cpri_id'] ?>
                                </td>
                                <td>
                                    <?php echo $row['P_name'] ?>
                                </td>
                                <td>
                                    <?php echo $row['p_price'] ?>
                                </td>
                                <td>
                                    <?php echo $row['p_des'] ?>
                                </td>
                                <td>

                                    <a href="approveProducts.php?cpri_id=<?php echo $row['cpri_id'] ?>" > <button  name="Releasebtn"> Approved
                                        </button> </a>


                                </td>
                                <td>
                                <a href="Remanufacture.php?cpri_id=<?php echo $row['cpri_id']?>"> <button name="Releasebtn"> Reject
                                        </button> </a>
                                </td>


                            </tr>

                        <?php } ?>

                    </tbody>
                </table>






            </div>
        </div>
    </div>


   
