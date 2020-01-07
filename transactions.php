

<?php 
   $conn = mysqli_connect("localhost","root","root","xeroxapp",3308);
   if($conn->connect_error){
           die("Connection failed:".$conn->connect_error);}
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
               <li class="nav-item">
                  <a class="nav-link" href="index.php">
                  <span>Home</span>
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#">
                  <span>Completed Orders</span>
                  </a>
               </li>
               <li class="nav-item active">
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
                  <li class="breadcrumb-item " aria-current="page">Transactions</li>
               </ol>
               <h6 class="slim-pagetitle">Transactions</h6>
            </div>
            <!-- slim-pageheader -->
            <div class="col-lg-6 mg-t-20 mg-lg-t-0" id="row2">
               <div class="card card-table">
                  <div class="table-responsive">
                     <table class="table mg-b-0 tx-13" id="table2">
                        <thead>
                           <tr class="tx-10">
                              <th class="pd-y-5 tx-center">Sr.No.</th>
                              <th class="pd-y-5 ">Email</th>
                              <th class="pd-y-5 tx-center">Amount</th>
                              <th class="pd-y-5 tx-center">Documents</th>
                              <th class="pd-y-5">Reference_Id</th>
                              <th class="pd-y-5">Date & Time</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php
                              $counter3 = 0;
                              $query3 = "select p.user_email,amount,noOfDocs,o.ref_id,o.date from payment_details p,order_details o where p.ref_id=o.ref_id;";
                              $result3 = $conn -> query($query3);
                              if($result3->num_rows > 0)
                              {
                              while($rows = $result3 ->fetch_assoc()){
                                  $counter3++;
                                  echo "<tr>
                                          <td class='pd-l-20 tx-center'><h2>".$counter3."</h2></td>
                                          <td><a href='' class='valign-middle tx-20'>".$rows['user_email']."</a></td>
                                          <td class='valign-middle tx-center'>".$rows['amount']."</td>
                                          <td class='valign-middle tx-center'>".$rows['noOfDocs']."</td>
                                          <td class='valign-middle'>".$rows['ref_id']."</td>
                                          <td class='valign-middle'>".$rows['date']."</td>
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
         </div>
      </div>
      <!-- col-6 -->
   </body>
</html>

