<?php 

//the fields for the table that I made:  ID, dateOrdered, custName, status
//change it na lang when needed

// require_once("connect.php");
// if (isset($_POST['submit'])) { //adding
//     $query = mysqli_query($DBConnect, "SELECT * FROM sales_customer s ORDER by s.PONumber DESC LIMIT 1"); //gets the latest PO
//     $retrieve = mysqli_fetch_array($query);
//     $last_po = $retrieve["PONumber"] + 1; //gets the latest PO and adds 1 to it
    
//     $add = "INSERT INTO sales_customer (PONumber,dateOrdered,custName,status) VALUES
//     ('$last_po','{$_POST['date_ordered']}','{$_POST['cust_name']}','{$_POST['stat']}')";
//     mysqli_query($DBConnect, $add) or die (mysqli_error());
//   }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>LazeRosa - Customer Order List</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee">
    <link rel="stylesheet" href="assets/css/Jost.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/material-icons.min.css">
    <link rel="stylesheet" href="assets/css/breadcrumb.css">
    <link rel="stylesheet" href="assets/css/customtable.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/sticky-dark-top-nav-with-dropdown-1.css">
    <link rel="stylesheet" href="assets/css/sticky-dark-top-nav-with-dropdown.css">
</head>

<body id="Page-Body">
<div id="Page-Wrapper">
        <div class="d-flex flex-column" id="Body-Wrapper">
            <div id="Body">
                <nav class="navbar navbar-light navbar-expand sticky-top bg-white shadow mb-4 topbar static-top" id="Navigation-Bar" style="height: 90px;padding-left: 0px;margin-bottom: 0px;padding-bottom: 8px;">
                    <div class="container-fluid" id="Navbar-Container">
                        <form class="form-inline d-none d-sm-inline-block mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" id="Navbar-MenuSection" style="width: 100%;">
                            <div id="Navbar-ButtonGroup" class="input-group" style="width: 100%;min-width: 1000px;"><img id="Site-Logo" src="assets/img/SYSTIMP/LazeRosa%20Logo.png" style="width: 100pxpx;height: 90px;">
                                <div class="collapse navbar-collapse" id="Header-Menu">
                                    <ul class="nav navbar-nav nav-right" id="Header-Menu-Frame" style="margin-left: 18px;height: 100%;">
                                        <li class="nav-item d-block" role="presentation" id="Home-Select" style="padding: 0px;padding-top: 0px;width: 85px;height: 100%;margin-right: 25px;">
                                            <div data-bs-hover-animate="pulse" id="Home-Button" style="padding: 0px;padding-top: 0px;width: 100%;height: 100%;padding-bottom: 0px;"><a class="active text-center d-block" id="Home-Link" href="dashboard.php" style="color: rgb(0,0,0);height: 100%;font-size: 15px;padding-top: 0px;font-family: ABeeZee, sans-serif;width: 100%;"><img class="d-block" id="Home-Icon" src="assets/img/SYSTIMP/Home%20(Icon).png" style="width: 25px;margin-left: auto;margin-right: auto;padding-bottom: 10px;padding-top: 15px;margin-top: 0px;"><span>Home</span></a></div>
                                        </li>
                                        <li class="nav-item dropdown d-block" data-bs-hover-animate="pulse" id="Inventory-Select-DD" style="width: auto;margin-right: 25px;margin-left: 0px;padding-left: 5px;"><a class="dropdown-toggle nav-link d-block" data-toggle="dropdown" aria-expanded="false" id="Inventory-Link" href="#" style="height: 100%;font-family: ABeeZee, sans-serif;color: rgb(0,0,0);font-size: 15px;padding-right: 0;padding-left: 0;"><img class="d-block d-xl-flex" id="Inventory-Icon" src="assets/img/SYSTIMP/Inventory%20(Icon).png" style="width: 25px;padding-right: 0px;padding-left: 0px;margin-right: auto;margin-left: auto;padding-top: 15px;padding-bottom: 10px;"><span>Inventory</span></a>
                                            <div class="dropdown-menu border rounded shadow" role="menu" id="Inventory-Dropdown-Submenu" style="color: rgb(0,0,0);background-color: rgb(255,255,255);font-family: ABeeZee, sans-serif;font-size: 14px;width: auto;">
                                            <a class="dropdown-item d-block" role="presentation" id="ViewInv-Link" href="viewinventory.php" style="height: 50px;margin-top: 5px;"><span id="ViewInv-Text">View Inventory</span></a>
                                            <a class="dropdown-item d-block" role="presentation" id="Pricelist-Link" href="pricelist.php" style="height: 50px;margin-top: 5px;"><span id="Pricelist-Text">Pricelist</span></a></div>
                                </li>
                                <li class="nav-item dropdown d-block" data-bs-hover-animate="pulse" id="Sales-Select-DD" style="width: auto;margin-right: 25px;margin-left: 0px;padding-left: 5px;"><a class="dropdown-toggle nav-link d-block" data-toggle="dropdown" aria-expanded="false" id="Sales-Link" href="#" style="height: 100%;font-family: ABeeZee, sans-serif;color: rgb(0,0,0);font-size: 15px;padding-right: 0;padding-left: 0;"><img class="d-block d-xl-flex" id="Sales-Icon" src="assets/img/SYSTIMP/Sales%20(Icon).png" style="width: 25px;padding-right: 0px;padding-left: 0px;margin-right: auto;margin-left: auto;padding-top: 15px;padding-bottom: 10px;"><span>Sales</span></a>
                                    <div
                                        class="dropdown-menu border rounded shadow" role="menu" id="Sales-Dropdown-Submenu" style="color: rgb(0,0,0);background-color: rgb(255,255,255);font-family: ABeeZee, sans-serif;font-size: 14px;width: 205px;">
                                        <a class="dropdown-item d-block" role="presentation" id="CustPO-Link" href="customerpo.php" style="height: 50px;margin-top: 5px;"><span id="CustPO-Text">Customer PO</span></a>
                                        <a class="dropdown-item d-block" role="presentation" id="CustOrderList-Link" href="customerorderlist.php" style="height: 50px;margin-top: 5px;width: auto;"><span id="CustOrderList-Text">Customer Order List</span></a>
                                        <a class="dropdown-item d-block" role="presentation" id="CustTracker-Link" href="customerordertracker.php" style="height: 50px;margin-top: 5px;"><span id="CustTracker-Text">Customer Order Tracker</span></a></div>
                            </li>
                            <li class="nav-item dropdown d-block" data-bs-hover-animate="pulse" id="Reorder-Select-DD" style="width: auto;margin-right: 25px;margin-left: 0px;padding-left: 5px;"><a class="dropdown-toggle nav-link d-block" data-toggle="dropdown" aria-expanded="false" id="Reorder-Link" href="#" style="height: 100%;font-family: ABeeZee, sans-serif;color: rgb(0,0,0);font-size: 15px;padding-right: 0;padding-left: 0;"><img class="d-block d-xl-flex" id="Reorder-Icon" src="assets/img/SYSTIMP/Reorder%20(Icon).png" style="width: 25px;padding-right: 0px;padding-left: 0px;margin-right: auto;margin-left: auto;padding-top: 15px;padding-bottom: 10px;"><span>Reorder</span></a>
                                <div
                                    class="dropdown-menu border rounded shadow" role="menu" id="Reorder-Dropdown-Submenu" style="color: rgb(0,0,0);background-color: rgb(255,255,255);font-family: ABeeZee, sans-serif;font-size: 14px;width: 195px;">
                                    <a class="dropdown-item d-block" role="presentation" id="SuppPO-Link" href="supplierpo.php" style="height: 50px;margin-top: 5px;"><span id="SuppPO-Text">Supplier PO</span></a>
                                    <a class="dropdown-item d-block" role="presentation" id="SuppOrderList-Link" href="supplierorderlist.php" style="height: 50px;margin-top: 5px;width: auto;"><span id="SuppOrderList-Text">Supplier Order List</span></a>
                                    <a class="dropdown-item d-block" role="presentation" id="SuppTracker-Link" href="supplierordertracker.php" style="height: 50px;margin-top: 5px;"><span id="SuppTracker-Text">Supplier Order Tracker</span></a></div>
                    </li>
                    <li class="nav-item dropdown d-block" data-bs-hover-animate="pulse" id="Reports-Select-DD" style="width: auto;margin-right: 25px;margin-left: 0px;padding-left: 5px;"><a class="dropdown-toggle nav-link d-block" data-toggle="dropdown" aria-expanded="false" id="Reports-Link" href="#" style="height: 100%;font-family: ABeeZee, sans-serif;color: rgb(0,0,0);font-size: 15px;padding-right: 0;padding-left: 0;"><img class="d-block d-xl-flex" id="Reports-Icon" src="assets/img/SYSTIMP/Reports%20(Icon).png" style="width: 25px;padding-right: 0px;padding-left: 0px;margin-right: auto;margin-left: auto;padding-top: 15px;padding-bottom: 10px;"><span>Reports</span></a>
                        <div
                            class="dropdown-menu border rounded shadow" role="menu" id="Reports-Dropdown-Submenu" style="color: rgb(0,0,0);background-color: rgb(255,255,255);font-family: ABeeZee, sans-serif;font-size: 14px;width: 195px;">
                            <a class="dropdown-item d-block" role="presentation" id="TotSalesEx-Link" href="Reports_Total.html" style="height: 50px;margin-top: 5px;"><span id="TotSalesEx-Text">Total Sales &amp; Expenses</span></a>
                            <a class="dropdown-item d-block" role="presentation" id="DamRet-Link" href="Reports_DamRet.html" style="height: 50px;margin-top: 5px;width: auto;"><span id="DamRet-Text">Damaged/Returned</span></a></div>
            </li>
            </ul>
        </div>
    </div>
    </form>
    <ul class="nav navbar-nav flex-nowrap ml-auto" id="Header-Personal">
        <li class="nav-item dropdown d-sm-none no-arrow" id="Personal-Section"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fas fa-search"></i></a>
            <div class="dropdown-menu dropdown-menu-right p-3 animated--grow-in" role="menu" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto navbar-search w-100">
                    <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                        <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                    </div>
                </form>
            </div>
        </li>
        <li class="nav-item dropdown no-arrow mx-1" role="presentation" id="Notification">
            <div class="nav-item dropdown no-arrow" id="Notification-DD"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" data-bs-hover-animate="swing" id="Notification-Link" href="#"><span id="Notification-Counter" class="badge badge-danger badge-counter">3+</span><img id="Notification-Bell" style="width: 25px;height: 25px;" src="assets/img/SYSTIMP/Notifications%20(Icon).png"></a>
                <div
                    class="dropdown-menu dropdown-menu-right dropdown-list dropdown-menu-right animated--grow-in" role="menu" id="Notification-Menu">
                    <h6 id="Notification-DDHeader" class="dropdown-header" style="background-color: #ffafaf;font-family: Nunito, sans-serif;font-size: 12px;color: rgb(0,0,0);">NOTIFICATION center</h6>
                    <a class="d-flex align-items-center dropdown-item" id="Report-Notification-Item" href="#">
                        <div id="Report-NotifItem-Type" class="mr-3">
                            <div class="bg-primary icon-circle" id="Report-NotifItem-TypeCircleFrame"><i class="fas fa-file-alt text-white" id="Report-NotifItem-TypeIcon"></i></div>
                        </div>
                        <div id="Report-NotifItem-Details"><span id="Report-NotifItem-Date" class="small text-gray-500">December 12, 2019</span>
                            <p id="Report-NotifItem-Description">A new monthly report is ready to download!</p>
                        </div>
                    </a>
                    <a class="d-flex align-items-center dropdown-item" id="Finance-Notification-Item" href="#">
                        <div id="Finance-NotifItem-Type" class="mr-3">
                            <div class="bg-success icon-circle" id="Finance-NotifItem-TypeCircleFrame"><i class="fas fa-donate text-white" id="Finance-NotifItem-TypeIcon"></i></div>
                        </div>
                        <div id="Finance-NotifItem-Details"><span id="Finance-NotifItem-Date" class="small text-gray-500">December 7, 2019</span>
                            <p id="Finance-NotifItem-Description">$290.29 has been deposited into your account!</p>
                        </div>
                    </a>
                    <a class="d-flex align-items-center dropdown-item" id="Alert-Notification-Item" href="#">
                        <div id="Alert-NotifItem-Type" class="mr-3">
                            <div class="bg-warning icon-circle" id="Alert-NotifItem-TypeCircleFrame"><i class="fas fa-exclamation-triangle text-white" id="Alert-NotifItem-TypeIcon"></i></div>
                        </div>
                        <div id="Alert-NotifItem-Details"><span id="Alert-NotifItem-Date" class="small text-gray-500">December 2, 2019</span>
                            <p id="Alert-NotifItem-Description">Spending Alert: We've noticed unusually high spending for your account.</p>
                        </div>
                    </a>
            </div>
            </div>
        </li>
        <div class="d-none d-sm-block topbar-divider" id="Header-Divider"></div>
        <li class="nav-item dropdown no-arrow" role="presentation" id="User-Profile-Dropdown">
            <div class="nav-item dropdown no-arrow" id="User-Profile-Frame"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" id="User-Profile-Link" href="#"><span class="d-none d-lg-inline mr-2 text-gray-600 small" id="User-Message" style="font-family: ABeeZee, sans-serif;color: rgb(0,0,0);font-size: 17px;">Hello,&nbsp;<span class="d-none d-lg-inline mr-2 text-gray-600 small" id="Username" style="font-family: ABeeZee, sans-serif;color: rgb(0,0,0);font-size: 17px;">Patrick</span><span class="d-none d-lg-inline mr-2 text-gray-600 small" id="Welcome-ExclPt" style="font-family: ABeeZee, sans-serif;color: rgb(0,0,0);font-size: 17px;">!</span></span><img class="border rounded-circle img-profile" data-bs-hover-animate="tada" id="User-Avatar" src="assets/img/Avatar.jpeg" style="width: 50px;height: 50px;"></a>
                <div
                    class="dropdown-menu shadow dropdown-menu-right animated--grow-in" role="menu" id="UserProfile-DD"><a class="dropdown-item" role="presentation" id="UserProfile-DDItem-Profile" href="#" style="font-family: ABeeZee, sans-serif;"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400" id="UserProfile-DDItem-ProfileIcon"></i>&nbsp;Profile</a>
                    <a
                        class="dropdown-item" role="presentation" id="UserProfile-DDItem-Settings" href="#" style="font-family: ABeeZee, sans-serif;"><i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400" id="UserProfile-DDItem-SettingsIcon"></i>&nbsp;Settings</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item" role="presentation" id="UserProfile-DDItem-Logout" href="login.php" style="font-family: ABeeZee, sans-serif;color: rgb(255,15,0);"><img id="UserProfile-DDItem-LogoutIcon" style="width: 15px;height: 15px;margin-right: 8px;" src="assets/img/SYSTIMP/Logout%20(Icon).png">&nbsp;Logout</a></div>
            </div>
        </li>
    </ul>
    </div>
    </nav>
    <div class="container-fluid" id="Page-Content">
        <div id="Breadcrumb-Border" style="width: auto;margin-bottom: 10px;"></div>
        <div class="d-sm-flex align-items-center mb-4" id="Page-Header">
            <h3 class="text-dark mb-0" id="Page-Header-Title" style="color: rgb(0,0,0);font-family: ABeeZee, sans-serif;font-weight: bold;font-size: 35px;">Sales: Customer Order List</h3>
        </div>
        <div class="card shadow" id="CustOL_Table" style="margin-right: 8vw;margin-left: 8vw;">
        <div class="card-header py-3" id="Table-Header" style="background-color: rgb(101,118,122);/*background: linear-gradient(to right, #2657eb, #de6161);*/">
                        <p class="text-center m-0 font-weight-bold" id="Table-HeaderTitle" style="font-size: 30px;font-weight: bold;font-family: 'Open Sans', sans-serif;color: #ffffff;">Customer Order List</p>
                <div class="row" id="Table-HeaderDetails">
                    <div class="col" id="Table-HeaderDetail-1">
                        <p class="text-right m-0 font-weight-bold" id="Table-TodayDate-Intro" style="font-size: 15px;width: 100%;font-family: 'Open Sans', sans-serif;color: #dddddd;font-weight: normal;">As of TODAY:&nbsp;</p>
                    </div>
                    <div class="col" id="Table-HeaderDetail-2">
                        <p class="text-left m-0 font-weight-bold" id="Table-TodayDate" style="font-size: 15px;width: 100%;font-family: 'Open Sans', sans-serif;color: #dddddd;font-weight: lighter;">TodayDate<script>
        var d = new Date();
        
        document.getElementById("Table-TodayDate").innerHTML = d.toDateString();
</script></p>
                    </div>
                </div>
            </div>
            <div class="card-body" id="Table-Body">
                <div class="row" id="Table-Tools">
                    <div class="col-md-6 text-nowrap" id="Table-Tool1">
                        <div id="Table-Tool1-Frame" class="dataTables_length" aria-controls="dataTable"><label id="Table-ShowItemNumber">Show&nbsp;<select id="Table-ShowItem-Dropdown" class="form-control form-control-sm custom-select custom-select-sm"><option value="10" selected="">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select>&nbsp;</label></div>
                    </div>
                    <div class="col-md-6" id="Table-Tool2">
                        <div class="text-md-right dataTables_filter" id="Table-Tool2-Frame"><label id="Table-Search" style="width: 350px;padding-right: 0px;margin-right: 12px;"><input type="search" id="Table-SearchBar" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label>
                            <button
                                class="btn" id="Table-SearchButton" type="submit" style="background-color: rgba(78,115,223,0);border-color: transparent;width: auto;padding-bottom: 0px;padding-top: 0px;padding-right: 0px;padding-left: 0px;"><img id="Search-ButtonIMG" src="assets/img/SYSTIMP/Search%20(Icon).png" style="width: 20px;"></button>
                        </div>
                    </div>
                </div>
                <div class="table-responsive table mt-2" id="CustOL-TableFrame" role="grid" aria-describedby="dataTable_info">
                    <table class="table my-0" id="CustOL-Table">
                        <thead id="Table-Header">
                            <tr class="text-center" id="Table-HeaderRow" style="background-color: #3e3e3e;font-family: Nunito, sans-serif;color: rgb(255,255,255);/*background: linear-gradient(to right, #2657eb, #de6161);*/">
                                <th class="text-center" style="width: 40px;"><input type="checkbox" id="Checkbox-Header" disabled=""></th>
                                <th style="width: 85px;">PO #</th>
                                <th style="width: 100px;">Date Ordered</th>
                                <th class="text-center" style="width: 350px;">Customer Name</th>
                                <th style="width: 150px;">Status</th>
                                <th style="width: 150px;">Action</th>
                            </tr>
                        </thead>
                        <tbody id="Table-Body">
                            <!-- <tr class="text-center" id="Table-Row">
                                <td id="Checkbox-Entry"><input type="checkbox" id="Checkbox-EntryItem"></td>
                                <td id="PONum-Entry">PO#</td>
                                <td id="DateOrd-Entry">DateOrdered</td>
                                <td class="text-left" id="CustName-Entry">CustomerName</td>
                                <td id="Status-Entry">Status</td>
                            </tr> -->
                            <form method="POST" action="">
                            <?php
                            require_once("connect.php");
                            
                                $query = mysqli_query($DBConnect, "SELECT * FROM customer_orders WHERE custStatus = 'Received' ORDER by custPO");  //getting PO
                                while($retrieve = mysqli_fetch_array($query)){
                                    echo "<tr class='text-center' id='Table-Row'>"; 
                                    echo "<td><input type='checkbox' name='checkboxid[]' value=$retrieve[PONumber]></td>";
                                    echo "<td>" . $retrieve["custPO"].  "</td>";
                                    echo "<td>" . $retrieve["custDateOrdered"].  "</td>";
                                    echo "<td>" . $retrieve["custName"].  "</td>";
                                    echo "<td>" . $retrieve["custStatus"].  "</td>";
                                    // echo "<td>". $retrieve["custID"].  "</td>";
                                    // echo "<td>" . $retrieve["custMOP"].  "</td>";
                                    // echo "<td>" . $retrieve["custDatePickup"].  "</td>";
                                    // echo "<td>" . $retrieve["custPlatform"].  "</td>";
                                    // echo "<td>" . $retrieve["custCourier"].  "</td>";
                                //     echo "</tr>";
                                // }
                            ?>
                            <td>
                            <button type='button' class="btn btn-info float-center" data-toggle='modal' data-target='#viewModal<?php echo $i; ?>'>VIEW</button>

                            <div id="viewModal<?php echo $i; ?>" class="modal fade" role="dialog">
                              <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                  <div class="modal-body">
                                      <label for="custName">Customer Name</label><br>
                                      <input type="text" name="custName"  value="<?php echo $retrieve['custName']; ?>" disabled><br><br>
                                      
                                      <label for="custPO">Customer Purchase Order Number</label><br>
                                      <input type="text" name="custPO"  value="<?php echo $retrieve['custPO']; ?>" disabled><br><br>

                                      <label for="custEmail">Customer Email</label><br>
                                      <input type="email" name="custEmail"  value="<?php echo $retrieve['custEmail']; ?>" disabled><br><br>
                                      
                                      <label for="custNumber">Customer Contact Number</label><br>
                                      <input type="text" name="custNumber" value="<?php echo $retrieve['custNumber']; ?>" disabled><br><br>
                                      
                                      <label for="custAddress">Customer Address</label><br>
                                      <input type="text" name="custAddress" value="<?php echo $retrieve['custAddress']; ?>" disabled><br><br>
                                      
                                      <label for="custMOP">Mode of Payment</label><br>
                                      <input type="text" name="custMOP"  value="<?php echo $retrieve['custMOP']; ?>" disabled><br><br>

                                      <label for="custDateOrder">Date Ordered</label><br>
                                      <input type="text" name="custDateOrder"  value="<?php echo $retrieve['custDateOrdered']; ?>" disabled><br><br>

                                      <label for="custPickupDate">Pickup Date</label><br>
                                      <input type="text" name="custPickupDate"  value="<?php echo $retrieve['custDatePickup']; ?>" disabled><br><br>

                                      <label for="custPlatform">Platform</label><br>
                                      <input type="text" name="custPlatform"  value="<?php echo $retrieve['custPlatform']; ?>" disabled><br><br>

                                      <label for="custCourier">Courier</label><br>
                                      <input type="text" name="custCourier"  value="<?php echo $retrieve['custCourier']; ?>" disabled><br><br>

                                      
                                      <br><br><br>

                                      <table>
                                        <tr>
                                          <th>Product Name</th>
                                          <th>Quantity</th>
                                          <th>Unit Price</th>
                                          <th>Amount</th>
                                        </tr>
                                        <tbody>
                                          <?php
                                          $productcount = 0;
                                          $productquery = "SELECT purchaseID, COUNT(*) AS ordercount
                                                      FROM dblazerosa2.purchase_order_items
                                                      WHERE purchaseID =" .  $row['purchaseID'];
                                          $productresult = mysqli_query($dbc, $productquery);
                                          while ($productrow = mysqli_fetch_array($productresult, MYSQLI_ASSOC)) {
                                            if ($productcount < $productrow['ordercount']) {
                                              $finalquery = "SELECT p.*, poi.*, i.*
                                                FROM purchase_orders p
                                                JOIN purchase_order_items poi
                                                ON p.purchaseID = poi.purchaseID
                                                JOIN tblinventory i
                                                ON poi.itemID = i.pID";
                                              $finalresult = mysqli_query($dbc, $finalquery);
                                              while ($finalrow = mysqli_fetch_array($finalresult, MYSQLI_ASSOC)) {
                                                if ($productcount < $productrow['ordercount'] && $row['purchaseID'] == $finalrow['purchaseID']) {
                                                  $productcount++;
                                          ?>
                                                  <tr>
                                                    <td><input type="text" name="product[]" value="<?php echo $finalrow['pBrand'],' ', $finalrow['pName']; ?>" disabled></td>
                                                    <td><input type="number" min="1"  name="qty[]" value="<?php echo $finalrow['quantity']; ?>" disabled></td>
                                                    <td><input type="decimal"  name="unitp[]" step=".01" value="<?php echo $finalrow['unitPrice']; ?>" disabled></td>
                                                    <td><input type="text" value="<?php echo $finalrow['amount']; ?>" disabled></td>
                                                  </tr>
                                          <?php
                                                }
                                              }
                                            }
                                          }
                                          ?>
                                        </tbody>
                                      </table>
                                      <br><br>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  </div>
                                </div>

                              </div>
                            </div>
                          </td>
                          <?php
                            echo "</tr>";
                          }
                          ?>
                        </tbody>
                        <tfoot id="Table-Footer" style="background-color: #dcdcdc;">
                            <tr class="text-center" id="Table-FooterRow" style="color: rgb(0,0,0);/*background: linear-gradient(to right, rgba(38,87,235,0.49), rgba(222,97,97,0.5));*/background-color: #969696;">
                                <td class="text-center"><input type="checkbox" id="Checkbox-Footer" disabled=""></td>
                                <td><strong>PO #</strong></td>
                                <td><strong>Date Ordered</strong></td>
                                <td class="text-left"><strong>Customer Name</strong></td>
                                <td><strong>Status</strong></td>
                                <td><strong>Action</strong></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="row" id="Table-Details">
                    <div class="col-md-6 align-self-center" id="Table-PageInd" style="width: 316px;"><span id="Table-PageInd-Range">Showing&nbsp;<span id="Table-PageInd-CurrentFirst">1</span><span>&nbsp;to&nbsp;</span><span id="Table-PageInd-CurrentLast">10</span><span>&nbsp;of&nbsp;</span><span id="Table-PageInd-MaxNum">27</span></span>
                    </div>
                    <div class="col-md-6" id="Table-PageNav-Frame">
                        <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers" id="Table-PageNavBar">
                            <ul class="pagination" id="Table-PageNav">
                                <li class="page-item disabled" id="Table-PageNav-Prev"><a class="page-link" href="#" aria-label="Previous" id="Table-PageNav-Prev-Link"><span aria-hidden="true">«</span></a></li>
                                <li class="page-item active" id="Table-PageNav-P1"><a class="page-link" href="#" id="Table-PageNav-P1-Link">1</a></li>
                                <li class="page-item" id="Table-PageNav-P2"><a class="page-link" href="#" id="Table-PageNav-P2-Link">2</a></li>
                                <li class="page-item" id="Table-PageNav-P3"><a class="page-link" href="#" id="Table-PageNav-P3-Link">3</a></li>
                                <li class="page-item" id="Table-PageNav-Next"><a class="page-link" href="#" aria-label="Next" id="Table-PageNav-Next-Link"><span aria-hidden="true">»</span></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="row" id="Table-Button-Row">
                    <div class="col offset-xl-6" id="Delete-Column">
                        <div id="Delete"><a class="btn btn-danger float-right" role="button" id="DeleteButton" data-toggle="modal" href="#DeletePopup" style="font-family: 'Open Sans', sans-serif;font-weight: normal;border-radius: 50px 10px;padding-right: 25px;padding-left: 25px;border-width: 2px;">DELETE</a>
                            <div
                                class="modal fade" role="dialog" tabindex="-1" id="DeletePopup">
                                <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document" id="Delete-Modal">
                                    <div class="modal-content" id="Delete-Modal-Content">
                                        <div class="modal-header" id="Delete-Modal-Header" style="background-color: #e74a3b;color: rgb(255,255,255);font-family: 'Open Sans', sans-serif;">
                                            <h4 id="Delete-Title" style="font-size: 30px;font-weight: normal;margin-top: 8px;">Delete Selected Customer Order List Items?</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close" id="Delete-CloseButton"><span aria-hidden="true">×</span></button></div>
                                        <div class="modal-body"
                                            id="Delete-ModalBody">
                                            <div class="table-responsive table mt-2" id="DeleteTableFrame" role="grid" aria-describedby="dataTable_info" style="width: auto;">
                                                <table class="table my-0" id="DeleteTable">
                                                    <thead id="DeleteTable-Header">
                                                        <tr class="text-center" id="DeleteTable-HeaderRow" style="background-color: #FF7A00;font-family: Nunito, sans-serif;color: rgb(0,0,0);">
                                                            <th>PO #</th>
                                                            <th style="width: 180px;">Date Ordered</th>
                                                            <th class="text-left" style="width: 275px;">Customer Name</th>
                                                            <th style="width: 150px;">Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="DeleteTable-Body">
                                                        <tr class="text-center" id="DeleteTable-Row">
                                                            <td id="PONum-DeleteEntry">DeletePO#</td>
                                                            <td id="DateOrdered-DeleteEntry">DeleteDateOrdered</td>
                                                            <td class="text-left" id="CustName-DeleteEntry">DeleteCustomerName</td>
                                                            <td id="Status-DeleteEntry">DeleteStatus</td>
                                                        </tr>
                                                        <?php
                                                            // $arr = $_POST["checkboxid"];
                                                            // echo "array: " .$arr;
                                                            // foreach($arr as $value){
                                                            //     $query = mysqli_query($DBConnect, "SELECT ID FROM sales_customer s WHERE ID $value");
                                                            //     $retrieve = mysqli_fetch_array($query);
                                                            //     echo "<tr>"; 
                                                            //     echo "<td>" . $retrieve["ID"].  "</td>";
                                                            //     echo "<td>". $retrieve["dateOrdered"].  "</td>";
                                                            //     echo "<td>" . $retrieve["custName"].  "</td>";
                                                            //     echo "<td>" . $retrieve["status"].  "</td>";
                                                            //     echo "</tr>";
                                                            // }

                                                            if(isset($_POST["delete"])){ //delete
                                                                $all = $_POST["checkboxid"];
                                                                $extract = implode(',', $all);
                                                                echo $extract;
                                                                $query = "DELETE FROM customer_orders WHERE custPO IN($extract)";
                                                                $query2 = mysqli_query($DBConnect, $query);

                                                                if($query2){
                                                                    echo "<script type='text/javascript'> document.location = 'Sales_custOrderList.php'; </script>";
                                                                }
                                                            }
                                                        ?>
                                                    </tbody>
                                                    <tfoot id="DeleteTable-Footer" style="background-color: #dcdcdc;">
                                                        <tr class="text-center" id="DeleteTable-FooterRow">
                                                            <td><strong>PO #</strong></td>
                                                            <td><strong>Date Ordered</strong></td>
                                                            <td class="text-left"><strong class="text-left">Customer Name</strong></td>
                                                            <td><strong>Status</strong></td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="modal-footer" id="Delete-ModalFooter"><button class="btn btn-light text-danger" id="Delete-CancelButton" data-dismiss="modal" type="button" style="font-family: 'Open Sans', sans-serif;">Cancel</button><button class="btn btn-danger" id="Delete-ConfirmButton"
                                               name="delete" type="submit" style="border-radius: 50px 10px;padding-right: 25px;padding-left: 25px;font-family: 'Open Sans', sans-serif;">CONFIRM DELETION</button></div>
                                               </form>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="col" id="EditInv-Column">
                <div id="ViewInv_Edit"><a class="btn btn-warning float-right" role="button" id="EditButton" data-toggle="modal" href="#EditPopup" style="font-family: 'Open Sans', sans-serif;font-weight: normal;border-radius: 50px 10px;padding-right: 25px;padding-left: 25px;border-width: 2px;">EDIT</a>
                    <div
                        class="modal fade" role="dialog" tabindex="-1" id="EditPopup">
                        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document" id="EditInv-Modal">
                            <div class="modal-content" id="EditInv-Modal-Content">
                                <div class="modal-header" id="EditInv-Modal-Header" style="background-color: #f6c23e;color: rgb(255,255,255);font-family: 'Open Sans', sans-serif;">
                                    <h4 id="EditInv-Title" style="font-size: 30px;font-weight: normal;margin-top: 8px;">Edit Order List</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close" id="EditInv-CloseButton"><span aria-hidden="true">×</span></button></div>
                                <div class="modal-body" id="EditInv-ModalBody">
                                    <div class="table-responsive table mt-2" id="ViewInv-EditTableFrame" role="grid" aria-describedby="dataTable_info" style="width: auto;">
                                        <table class="table my-0" id="ViewInv-EditTable">
                                            <thead id="EditTable-Header">
                                                <tr id="EditTable-HeaderRow" style="background-color: #FF7A00;font-family: Nunito, sans-serif;color: rgb(0,0,0);">
                                                <td><strong>PO #</strong></td>
                                                <td><strong>Date Ordered</strong></td>
                                                <td class="text-left"><strong>Customer Name</strong></td>
                                                <td><strong>Status</strong></td>
                                                </tr>
                                            </thead>
                                            <tbody id="EditTable-Body">
                                                <?php
                                                    require("connect.php");
                                                    if(isset($_POST["edit"])){
                                                        $all = $_POST["checkboxid"];
                                                        $extract = implode($all);
                                                        $poedit = $_POST["poedit"];
                                                        $dateorderedit = $_POST["dateorderedit"];
                                                        $nameedit = $_POST["nameedit"];
                                                        $statusedit = $_POST["statusedit"];
                                                        // echo $extract;
                                                        $query = "UPDATE customer_orders SET custPO='$poedit', custDateOrdered='$dateorderedit', custName='$nameedit',
                                                        custStatus='$statusedit' WHERE custPO='$poedit'";
                                                        $query2 = mysqli_query($DBConnect, $query);

                                                        if($query2){
                                                            echo "<script type='text/javascript'> document.location = 'customerorderlist.php'; </script>";
                                                        }
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="modal-footer" id="EditInv-ModalFooter"><button class="btn btn-light text-danger" id="EditInv-CancelButton" data-dismiss="modal" type="button" style="font-family: 'Open Sans', sans-serif;">Cancel</button><button class="btn btn-success" id="EditInv-ConfirmButton"
                                        name = "edit" type="submit" style="padding-right: 25px;padding-left: 25px;border-radius: 50px 10px;font-family: 'Open Sans', sans-serif;">SAVE CHANGES</button></div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
                <div class="col" id="Add-Column">
                    <form method="POST" action="customerpo.php">
                    <div id="Add"><button class="btn btn-success float-right" type="submit" role="button" id="AddButton" data-toggle="modal" href="customerpo.php" style="font-family: 'Open Sans', sans-serif;font-weight: normal;border-radius: 50px 10px;padding-right: 25px;padding-left: 25px;border-width: 2px;">ADD</button>
                        </form> 

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div></div>
    </div>
    <div></div>
    </div>
    <footer class="bg-white sticky-footer" id="Footer" style="background: linear-gradient(to bottom, rgba(255, 255, 255, 0.5), rgba(148, 148, 148, 0.5));">
        <div class="container my-auto">
            <div class="text-center my-auto copyright"><span>LazeRosa Systems || by Group 3</span></div>
        </div>
    </footer>
    </div><a class="border rounded d-inline scroll-to-top" id="Pagetop-Button" href="#page-top"><i class="fas fa-angle-up"></i></a></div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/custom4.js"></script>
</body>

</html>