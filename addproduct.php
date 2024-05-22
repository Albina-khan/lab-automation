<?php include 'links.php'; ?>

<body class="bg-gradient-primary">

    <div class="container">
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">


                <div class="row">

                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4"> <i> Add Product for Testing </i></h1>
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
                                    ADD
                                </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <?php


    include 'connection.php';

    if (isset($_POST['btn_submit'])) {
        $pName = $_POST['p_name'];
        $pPrice = $_POST['p_price'];
        $pDesc = $_POST['p_desc'];

        $sql = "INSERT INTO products(product_name , product_price , product_desc) values ('$pName', '$pPrice' , '$pDesc')";
        $row = mysqli_query($conn, $sql);
        if ($row) {
            echo "<script> alert('Item added!') </script>";
        } else {
            echo "<script> alert('Something went wrong! ') </script>";
        }
    }
    ?>