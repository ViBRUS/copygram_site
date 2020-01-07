<?php 
    $conn = mysqli_connect("localhost","root","root","xeroxapp",3308);
    if($conn->connect_error){
            die("Connection failed:".$conn->connect_error);}

    $pending_orders = 0;
?>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Meta -->
        <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
        <meta name="author" content="ThemePixels">

        <title>CopyGram</title>

        <!-- vendor css -->
        <link href="css/font-awesome.css" rel="stylesheet">
        <link href="css/ionicons.css" rel="stylesheet">
        <link href="css/chartist.css" rel="stylesheet">
        <link href="css/rickshaw.min.css" rel="stylesheet">

        <!-- Slim CSS -->
        <link rel="stylesheet" href="css/slim.css">
        <!--My ccs-->
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <div class="slim-header">
            <div class="container">
                <div class="slim-header-left">
                    <h2 class="slim-logo">CopyGram</h2>

                </div>
                <!-- slim-header-left -->
                <div class="slim-header-right">

                    <div class="dropdown dropdown-c">
                        <a href="#" class="logged-user" data-toggle="dropdown">
                            <img src="images/copygram1.png" alt="">
                            <span>Admin</span>
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <nav class="nav">
                                <a href="page-signin.html" class="nav-link"><i class="icon ion-forward"></i> Sign Out</a>
                            </nav>
                        </div>
                        <!-- dropdown-menu -->
                    </div>
                    <!-- dropdown -->
                </div>
                <!-- header-right -->
            </div>
            <!-- container -->
        </div>
        <!-- slim-header -->

        <div class="slim-navbar">
            <div class="container">
                <ul class="nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">
                            <span>Home</span>
                        </a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">

                            <span>Completed Orders</span>
                        </a>

                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="transactions.php">
                            <span>Transactions</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- container -->
        </div>
        <!-- slim-navbar -->

        <div class="slim-mainpanel">
            <div class="container">
                <div class="slim-pageheader">
                    <ol class="breadcrumb slim-breadcrumb">
                        <li class="breadcrumb-item"><a href="#">CopyGram</a></li>
                        <li class="breadcrumb-item " aria-current="page">Home</li>
                    </ol>
                    <h6 class="slim-pagetitle">Home</h6>
                </div>
                <!-- slim-pageheader -->

                <div class="dash-headline-left">
                    <div class="row row-sm mg-t-20">
                        <div class="col-lg-6">
                            <div class="card card-table">
                                <div class="card-header">
                                    <h6 class="slim-card-title">Orders from users</h6>
                                </div>
                                <!-- card-header -->
                                <div class="table-responsive">
                                    <table class="table mg-b-0 tx-13" id="table1">
                                        <thead>
                                            <tr class="tx-10">
                                                <th class="wd-10p pd-y-5">&nbsp;</th>
                                                <th class="pd-y-5">User Email</th>
                                                <th class="pd-y-5 tx-center">Documents</th>
                                                <th class="pd-y-5" tx-center>Amount</th>
                                                <th class="pd-y-5">Payment</th>
                                            </tr>
                                        </thead>

                                        <?php 
                    $counter1 = 0;
                    $query1 = "SELECT * from payment_details";
                    $result = $conn -> query($query1);
                    if($result->num_rows > 0)
                    {
                        while($rows = $result ->fetch_assoc()){
                            $counter1++;
                            echo "<tr>
                                    <td class='pd-l-20'><h2 style='margin:8px 2px 2px 8px'>".$counter1."</h2></td>
                                    <td class='valign-middle tx-20' id='email'>".$rows['user_email']."</td>
                                    <td class='valign-middle tx-center'>".$rows['noOfDocs']."</td>
                                    <td class='valign-middle tx-center'>".$rows['amount']."</td>
                                    <td class='valign-middle'><span class='tx-success'>".$rows['Payment_Status']."</span></td>
                                    </tr>";
                        }
                    }
                    $pending_orders =  $counter1;
                    ?>

                                    </table>
                                </div>
                                <!-- table-responsive -->
                            </div>
                            <!-- card -->
                        </div>
                        <!-- col-6 -->

                        <div class="dash-headline">
                            <div class="dash-headline-right">
                                <div class="dash-headline-item-one">
                                    <div id="chartArea1" class="dash-chartist"></div>
                                    <div class="dash-item-overlay">
                                        <h1><?php echo $pending_orders;?> <span class="tx-24">Orders pending</span></h1>
                                        <!--<a href="#" class="orders-link">View Orders <i class="fa fa-angle-right mg-l-5"></i></a>-->
                                    </div>
                                </div>
                                <!-- dash-headline-item-one -->
                            </div>
                            <!-- dash-headline-left -->

                        </div>
                        <!-- d-flex ht-100v -->

                    </div>
                    <!-- row -->
                </div>

                <div class="col-lg-6 mg-t-20 mg-lg-t-0" id="row2">
                    <div class="card card-table">
                        <div class="card-header">
                            <h6 class="slim-card-title">User Order Details - <h2 id="user-email">user@gmail.com</h2></h6>
                        </div>
                        <!-- card-header -->
                        <div class="table-responsive">
                            <table class="table mg-b-0 tx-13" id="table2">
                                <thead>
                                    <tr class="tx-10">
                                        <th class="pd-y-5">Sr.No.</th>
                                        <th class="pd-y-5">Filename</th>
                                        <th class="pd-y-5">Copies</th>
                                        <th class="pd-y-5">Pages</th>
                                        <th class="pd-y-5">Sides</th>
                                        <th class="pd-y-5">Color</th>
                                        <th class="pd-y-5">Download</th>
                                        <th class="pd-y-5">Print Done<h7>&nbsp;</h7>
                                            <input type="checkbox" id="print-done-checkbox" onclick="checkAll()">
                                        </th>
                                    </tr>
                                </thead>
                                <tbody id="table2-body">
                                    <?php
                        $counter2 = 0;
                        $query2 = "SELECT useremail,filename,filelocation,copies,pages,sides,color FROM documents,printing_details WHERE printing_details.user_email=documents.useremail AND printing_details.file_name=documents.filename";
                        $result2 = $conn -> query($query2);
                    if($result2->num_rows > 0)
                    {
                        while($rows = $result2 ->fetch_assoc()){
                            $counter2++;
                            echo "<tr>
                                    <td class='pd-l-20'><h2 style='margin:8px 2px 2px 8px'>".$counter2."</h2></td>
                                    <td class='valign-middle tx-20'>".$rows['filename']."</td>
                                    <td class='valign-middle tx-center'>".$rows['copies']."</td>
                                    <td class='valign-middle tx-center'>".$rows['pages']."</td>
                                    <td class='valign-middle'>".$rows['sides']."</td>
                                    <td class='valign-middle'>".$rows['color']."</td>
                                    <td><a href='/xeroxapp/".$rows['filelocation']."'><button class='button2'>Download</button></a></td>
                                    <td><input type='checkbox' style='margin:20px 10px 10px 35px' class='item-checkbox'></td>
                                    </tr>";
                        }
                    }
                    ?>

                                </tbody>
                            </table>
                        </div>
                        <!-- table-responsive -->

                    </div>
                    <!-- card -->
                </div>
                <!-- col-6 -->
            </div>
            <!-- container -->
        </div>
        <!-- slim-mainpanel -->

        <div class="slim-footer">
            <div class="container">
                <p>Copyright 2019 &copy;CopyGram</p>
                <p>Designed by: <a href="">Sushant Said(TE COMP)</a></p>
            </div>
            <!-- container -->
        </div>
        <!-- slim-footer -->

        <script src="../lib/jquery/js/jquery.js"></script>
        <script src="../lib/popper.js/js/popper.js"></script>
        <script src="../lib/bootstrap/js/bootstrap.js"></script>
        <script src="../lib/jquery.cookie/js/jquery.cookie.js"></script>
        <script src="../lib/chartist/js/chartist.js"></script>
        <script src="../lib/d3/js/d3.js"></script>
        <script src="../lib/rickshaw/js/rickshaw.min.js"></script>
        <script src="../lib/jquery.sparkline.bower/js/jquery.sparkline.min.js"></script>

        <script src="../js/ResizeSensor.js"></script>
        <script src="../js/dashboard.js"></script>
        <script src="../js/slim.js"></script>

        <script src="js/code.js">
        </script>
    </body>

    </html>