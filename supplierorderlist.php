<?php
require_once('mysql_connect.php');

if (isset($_POST['submit'])) {
  $query = "INSERT INTO suppliers (supplierName,supplierEmail,supplierNumber,supplierAddress) VALUES
  ('{$_POST['suppName']}','{$_POST['suppEmail']}','{$_POST['suppNumber']}','{$_POST['suppAddress']}')";
  mysqli_query($dbc, $query);
  $suppid = mysqli_insert_id($dbc);

  $squery = "SELECT * FROM suppliers WHERE supplierID='{$suppid}'";
  $sresult = mysqli_query($dbc, $squery);
  $supp = mysqli_fetch_array($sresult, MYSQLI_ASSOC);

  $query2 = "INSERT INTO purchase_orders (supplierID,PONumber,dateOrdered,paymentMethod,status) VALUES
  ('{$suppid}','{$_POST['suppPO']}',NOW(),'{$_POST['suppMOP']}','Pending')";
  mysqli_query($dbc, $query2);
  $poid = mysqli_insert_id($dbc);

  for ($i = 0; $i < sizeof($_POST['product']); $i++) {
    $query = "INSERT INTO items (itemName) VALUES ('{$_POST['product'][$i]}')";
    mysqli_query($dbc, $query);
    $itemid = mysqli_insert_id($dbc);

    $amount = $_POST['qty'][$i] * $_POST['unitp'][$i];
    $query3 = "INSERT INTO purchase_order_items (purchaseID,itemID,quantity,unitPrice,amount) VALUES
    ('{$poid}','{$itemid}','{$_POST['qty'][$i]}','{$_POST['unitp'][$i]}','{$amount}')";
    mysqli_query($dbc, $query3);
  }
}

if (isset($_POST['confirm'])) {
    for ($i = 0; $i < sizeof($_POST['poid']); $i++) {
      $query = "UPDATE purchase_orders SET status='Deleted' WHERE purchaseID='{$_POST['poid'][$i]}'";
      mysqli_query($dbc, $query);
    }
  }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>LazeRosa - Supplier Order List</title>
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
                                            <div data-bs-hover-animate="pulse" id="Home-Button" style="padding: 0px;padding-top: 0px;width: 100%;height: 100%;padding-bottom: 0px;"><a class="active text-center d-block" id="Home-Link" href="Home_Dashboard.html" style="color: rgb(0,0,0);height: 100%;font-size: 15px;padding-top: 0px;font-family: ABeeZee, sans-serif;width: 100%;"><img class="d-block" id="Home-Icon" src="assets/img/SYSTIMP/Home%20(Icon).png" style="width: 25px;margin-left: auto;margin-right: auto;padding-bottom: 10px;padding-top: 15px;margin-top: 0px;"><span>Home</span></a></div>
                                        </li>
                                        <li class="nav-item dropdown d-block" data-bs-hover-animate="pulse" id="Inventory-Select-DD" style="width: auto;margin-right: 25px;margin-left: 0px;padding-left: 5px;"><a class="dropdown-toggle nav-link d-block" data-toggle="dropdown" aria-expanded="false" id="Inventory-Link" href="#" style="height: 100%;font-family: ABeeZee, sans-serif;color: rgb(0,0,0);font-size: 15px;padding-right: 0;padding-left: 0;"><img class="d-block d-xl-flex" id="Inventory-Icon" src="assets/img/SYSTIMP/Inventory%20(Icon).png" style="width: 25px;padding-right: 0px;padding-left: 0px;margin-right: auto;margin-left: auto;padding-top: 15px;padding-bottom: 10px;"><span>Inventory</span></a>
                                            <div
                                                class="dropdown-menu border rounded shadow" role="menu" id="Inventory-Dropdown-Submenu" style="color: rgb(0,0,0);background-color: rgb(255,255,255);font-family: ABeeZee, sans-serif;font-size: 14px;width: auto;"><a class="dropdown-item d-block" role="presentation" id="ViewInv-Link" href="Inv_ViewInv.html" style="height: 50px;margin-top: 5px;"><img class="d-block" id="ViewInv-Icon" src="assets/img/SYSTIMP/ViewInv.png" style="width: 20px;"><span id="ViewInv-Text">View Inventory</span></a>
                                                <a
                                                    class="dropdown-item d-block" role="presentation" id="Pricelist-Link" href="Inv_Pricelist.html" style="height: 50px;margin-top: 5px;"><img class="d-block" id="Pricelist-Icon" src="assets/img/Pricelist.png" style="width: 20px;"><span id="Pricelist-Text">Pricelist</span></a>
                                </div>
                                </li>
                                <li class="nav-item dropdown d-block" data-bs-hover-animate="pulse" id="Sales-Select-DD" style="width: auto;margin-right: 25px;margin-left: 0px;padding-left: 5px;"><a class="dropdown-toggle nav-link d-block" data-toggle="dropdown" aria-expanded="false" id="Sales-Link" href="#" style="height: 100%;font-family: ABeeZee, sans-serif;color: rgb(0,0,0);font-size: 15px;padding-right: 0;padding-left: 0;"><img class="d-block d-xl-flex" id="Sales-Icon" src="assets/img/SYSTIMP/Sales%20(Icon).png" style="width: 25px;padding-right: 0px;padding-left: 0px;margin-right: auto;margin-left: auto;padding-top: 15px;padding-bottom: 10px;"><span>Sales</span></a>
                                    <div
                                        class="dropdown-menu border rounded shadow" role="menu" id="Sales-Dropdown-Submenu" style="color: rgb(0,0,0);background-color: rgb(255,255,255);font-family: ABeeZee, sans-serif;font-size: 14px;width: 205px;"><a class="dropdown-item d-block" role="presentation" id="CustPO-Link" href="Sales_CustPO.html" style="height: 50px;margin-top: 5px;"><img class="d-block" id="CustPO-Icon" src="assets/img/CustPO.png" style="width: 20px;"><span id="CustPO-Text">Customer PO</span></a>
                                        <a
                                            class="dropdown-item d-block" role="presentation" id="CustOrderList-Link" href="Sales_CustOL.html" style="height: 50px;margin-top: 5px;width: auto;"><img class="d-block" id="CustOrderList-Icon" src="assets/img/CustOrderList.png" style="width: 20px;"><span id="CustOrderList-Text">Customer Order List</span></a><a class="dropdown-item d-block" role="presentation" id="CustTracker-Link"
                                                href="Sales_CustTR.html" style="height: 50px;margin-top: 5px;"><img class="d-block" id="CustTracker-Icon" src="assets/img/CustTracker.png" style="width: 20px;"><span id="CustTracker-Text">Customer Order Tracker</span></a></div>
                            </li>
                            <li class="nav-item dropdown d-block" data-bs-hover-animate="pulse" id="Reorder-Select-DD" style="width: auto;margin-right: 25px;margin-left: 0px;padding-left: 5px;"><a class="dropdown-toggle nav-link d-block" data-toggle="dropdown" aria-expanded="false" id="Reorder-Link" href="#" style="height: 100%;font-family: ABeeZee, sans-serif;color: rgb(0,0,0);font-size: 15px;padding-right: 0;padding-left: 0;"><img class="d-block d-xl-flex" id="Reorder-Icon" src="assets/img/SYSTIMP/Reorder%20(Icon).png" style="width: 25px;padding-right: 0px;padding-left: 0px;margin-right: auto;margin-left: auto;padding-top: 15px;padding-bottom: 10px;"><span>Reorder</span></a>
                                <div
                                    class="dropdown-menu border rounded shadow" role="menu" id="Reorder-Dropdown-Submenu" style="color: rgb(0,0,0);background-color: rgb(255,255,255);font-family: ABeeZee, sans-serif;font-size: 14px;width: 195px;"><a class="dropdown-item d-block" role="presentation" id="SuppPO-Link" href="Reorder_SuppPO.html" style="height: 50px;margin-top: 5px;"><img class="d-block" id="SuppPO-Icon" src="assets/img/SuppPO.png" style="width: 20px;"><span id="SuppPO-Text">Supplier PO</span></a>
                                    <a
                                        class="dropdown-item d-block" role="presentation" id="SuppOrderList-Link" href="Reorder_SuppOL.html" style="height: 50px;margin-top: 5px;width: auto;"><img class="d-block" id="SuppOrderList-Icon" src="assets/img/SuppOrderList.png" style="width: 20px;"><span id="SuppOrderList-Text">Supplier Order List</span></a><a class="dropdown-item d-block" role="presentation" id="SuppTracker-Link"
                                            href="supplierordertracker.html" style="height: 50px;margin-top: 5px;"><img class="d-block" id="SuppTracker-Icon" src="assets/img/SuppTracker.png" style="width: 20px;"><span id="SuppTracker-Text">Supplier Order Tracker</span></a></div>
                    </li>
                    <li class="nav-item dropdown d-block" data-bs-hover-animate="pulse" id="Reports-Select-DD" style="width: auto;margin-right: 25px;margin-left: 0px;padding-left: 5px;"><a class="dropdown-toggle nav-link d-block" data-toggle="dropdown" aria-expanded="false" id="Reports-Link" href="#" style="height: 100%;font-family: ABeeZee, sans-serif;color: rgb(0,0,0);font-size: 15px;padding-right: 0;padding-left: 0;"><img class="d-block d-xl-flex" id="Reports-Icon" src="assets/img/SYSTIMP/Reports%20(Icon).png" style="width: 25px;padding-right: 0px;padding-left: 0px;margin-right: auto;margin-left: auto;padding-top: 15px;padding-bottom: 10px;"><span>Reports</span></a>
                        <div
                            class="dropdown-menu border rounded shadow" role="menu" id="Reports-Dropdown-Submenu" style="color: rgb(0,0,0);background-color: rgb(255,255,255);font-family: ABeeZee, sans-serif;font-size: 14px;width: 195px;"><a class="dropdown-item d-block" role="presentation" id="TotSalesEx-Link" href="Reports_Total.html" style="height: 50px;margin-top: 5px;"><img class="d-block" id="TotSalesEx-Icon" src="assets/img/TotSalesEx.png" style="width: 20px;"><span id="TotSalesEx-Text">Total Sales &amp; Expenses</span></a>
                            <a
                                class="dropdown-item d-block" role="presentation" id="DamRet-Link" href="Reports_DamRet.html" style="height: 50px;margin-top: 5px;width: auto;"><img class="d-block" id="DamRet-Icon" src="assets/img/DamRet.png" style="width: 20px;"><span id="DamRet-Text">Damaged/Returned</span></a>
            </div>
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
                        <div class="dropdown-divider"></div><a class="dropdown-item" role="presentation" id="UserProfile-DDItem-Logout" href="index.html" style="font-family: ABeeZee, sans-serif;color: rgb(255,15,0);"><img id="UserProfile-DDItem-LogoutIcon" style="width: 15px;height: 15px;margin-right: 8px;" src="assets/img/SYSTIMP/Logout%20(Icon).png">&nbsp;Logout</a></div>
            </div>
        </li>
    </ul>
    </div>
    </nav>
    <div class="container-fluid" id="Page-Content">
        <div id="Breadcrumb-Border" style="width: auto;margin-bottom: 10px;"></div>
        <div class="d-sm-flex align-items-center mb-4" id="Page-Header"><img id="Page-Header-Icon" src="assets/img/SuppOrderList.png" style="width: 60px;margin-left: 0px;margin-right: 15px;margin-top: 0px;padding-top: 0px;padding-bottom: 0px;">
            <h3 class="text-dark mb-0" id="Page-Header-Title" style="color: rgb(0,0,0);font-family: ABeeZee, sans-serif;font-weight: bold;font-size: 35px;">Reorder: Supplier Order List</h3>
        </div>
        <div class="card shadow" id="SuppOL_Table" style="margin-right: 8vw;margin-left: 8vw;">
            <div class="card-header py-3" id="Table-Header" style="background-color: rgb(235,235,235);background: linear-gradient(to right, #2657eb, #de6161);">
                <p class="text-center m-0 font-weight-bold" id="Table-HeaderTitle" style="font-size: 30px;font-weight: bold;font-family: 'Open Sans', sans-serif;color: #ffffff;">Supplier Order List</p>
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
                <div class="table-responsive table mt-2" id="SuppOL-TableFrame" role="grid" aria-describedby="dataTable_info">
                    <table class="table my-0" id="pot">
                        <thead id="Table-Header">
                            <tr class="text-center" id="Table-HeaderRow" style="background-color: #3e3e3e;font-family: Nunito, sans-serif;color: rgb(255,255,255);/*background: linear-gradient(to right, #2657eb, #de6161);*/">
                                <th class="text-center" style="width: 40px;"><input type="checkbox" id="Checkbox-Header" disabled=""></th>
                                <th style="width: 85px;">PO #</th>
                                <th style="width: 100px;">Date Ordered</th>
                                <th class="text-center" style="width: 350px;">Supplier Name</th>
                                <th style="width: 150px;">Mode of Payment</th>
                                <th style="width: 150px;">Status</th>
                                <th style="width: 150px;">Action</th>
                            </tr>
                        </thead>
                        <tbody id="Table-Body">
                          <form method="POST">
                          <?php
                          $query = "SELECT p.*, s.* FROM purchase_orders p JOIN suppliers s ON p.supplierID = s.supplierID WHERE status = 'Received'";
                          $result = mysqli_query($dbc, $query);
                          $i = 0;

                          while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                            $i++;
                            echo "<tr class='text-center' style='font-family: Nunito, sans-serif;color: rgb(0,0,0);'>";
                            echo "<td><input type='checkbox' name='poid[]' value='{$row['purchaseID']}'></td>";
                            echo "<td>{$row['purchaseID']}</td>";
                            echo "<td>{$row['dateOrdered']}</td>";
                            echo "<td>{$row['supplierName']}</td>";
                            echo "<td>{$row['paymentMethod']}</td>";
                            echo "<td>{$row['status']}</td>";
                            
                          ?>
                          <td>
                            <button type='button' class="btn btn-info float-center" data-toggle='modal' data-target='#viewModal<?php echo $i; ?>'>VIEW</button>

                            <div id="viewModal<?php echo $i; ?>" class="modal fade" role="dialog" >
                              <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                  <div class="modal-body">
                                      <label for="suppName">Supplier Name</label><br>
                                      <input type="text" name="suppName"  value="<?php echo $row['supplierName']; ?>" disabled><br><br>
                                      <label for="suppPO">Supplier Purchase Order Number</label><br>
                                      <input type="text" name="suppPO"  value="<?php echo $row['purchaseID']; ?>" disabled><br><br>

                                      <label for="suppEmail">Supplier Email</label><br>
                                      <input type="email" name="suppEmail"  value="<?php echo $row['supplierEmail']; ?>" disabled><br><br>
                                      <label for="suppMOP">Mode of Payment</label><br>
                                      <input type="text" name="suppMOP"  value="<?php echo $row['paymentMethod']; ?>" disabled><br><br>

                                      <label for="suppNumber">Supplier Contact Number</label><br>
                                      <input type="text" name="suppNumber" value="<?php echo $row['supplierNumber']; ?>" disabled><br><br>

                                      <label for="suppAddress">Supplier Address</label><br>
                                      <input type="text" name="suppAddress" value="<?php echo $row['supplierAddress']; ?>" disabled><br><br>
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
                                <td class="text-left"><strong>Supplier Name</strong></td>
                                <td style="font-weight: bold;">Mode of Payment</td>
                                <td><strong>Status</strong></td>
                                <th style="width: 150px;"></th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="row" id="Table-Button-Row">
                    <div class="col offset-xl-6" id="Delete-Column">
                        <div id="Delete"><a class="btn btn-danger float-right" role="button" id="DeleteButton" onclick="isChecked()" data-toggle="modal" href="#DeletePopup" style="font-family: 'Open Sans', sans-serif;font-weight: normal;border-radius: 50px 10px;padding-right: 25px;padding-left: 25px;border-width: 2px;">DELETE</a>
                            <div
                                class="modal fade" role="dialog" tabindex="-1" id="DeletePopup">
                                <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable" role="document" id="Delete-Modal">
                                    <div class="modal-content" id="Delete-Modal-Content">
                                      <div id="checked" style="display:none">
                                        <div class="modal-header" style="background-color: #e74a3b;color: rgb(255,255,255);font-family: 'Open Sans', sans-serif;">
                                            <h4 id="Delete-Title" style="font-size: 30px;font-weight: normal;margin-top: 8px;">Delete Selected Supplier Order List Items?</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close" id="Delete-CloseButton"><span aria-hidden="true">×</span></button>
                                          </div>
                                          <div class="modal-body"
                                              id="Delete-ModalBody">
                                              <center><button class="btn btn-danger" id="Delete-ConfirmButton"
                                                      type="submit" style="border-radius: 50px 10px;padding-right: 25px;padding-left: 25px;font-family: 'Open Sans', sans-serif;" name="confirm">CONFIRM DELETION</button>
                                                    </center>
                                          </div>
                                        </div>
                                        <div id="none">
                                          <center><b><p>Please select at least 1 purchase order to delete!</p></b></center>
                                        </div>
                                        <div class="modal-footer" id="Delete-ModalFooter"><button class="btn btn-light text-danger" id="Delete-CancelButton" data-dismiss="modal" type="button" style="font-family: 'Open Sans', sans-serif;">Cancel</button></div>
                                    </div>
                                  </form>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="col" id="Add-Column">
                    <div id="Add"><a class="btn btn-success float-right" role="button" id="AddButton" href="supplierpo.php" style="font-family: 'Open Sans', sans-serif;font-weight: normal;border-radius: 50px 10px;padding-right: 25px;padding-left: 25px;border-width: 2px;">ADD</a>
                        <div
                            class="modal fade" role="dialog" tabindex="-1" id="AddPopup">
                            <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable" role="document" id="Add-Modal">
                                <div class="modal-content" id="Add-ModalContent">
                                    <div class="modal-header" id="Add-ModalHeader" style="background-color: rgb(28,200,138);color: rgb(255,255,255);font-family: 'Open Sans', sans-serif;">
                                        <h4 id="Add-Title" style="font-size: 30px;font-weight: normal;margin-top: 8px;">Add to Supplier Order List</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close" id="Add-CloseButton"><span aria-hidden="true">×</span></button></div>
                                    <div class="modal-body" id="Add-ModalBody">
                                        <div class="table-responsive table mt-2" id="AddTableFrame" role="grid" aria-describedby="dataTable_info" style="width: auto;">
                                            <table class="table my-0" id="AddTable">
                                                <thead id="AddTable-Header">
                                                    <tr class="text-center" id="AddTable-HeaderRow" style="background-color: #FF7A00;font-family: Nunito, sans-serif;color: rgb(0,0,0);">
                                                        <th>PO #</th>
                                                        <th style="width: 180px;">Date Ordered</th>
                                                        <th class="text-left" style="width: 275px;">Supplier Name</th>
                                                        <th>Mode of Payment</th>
                                                        <th>Courier</th>
                                                        <th style="width: 150px;">Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="AddTable-Body">
                                                    <tr id="AddTable-Row">
                                                        <td id="PONum-InputEntry"><input type="number" id="PONum-Input" style="border-color: transparent;width: 100px;" name="PONum Input" placeholder="Input PO #"></td>
                                                        <td id="DateOrd-InputEntry"><input id="DateOrd-Input" type="date" style="border-color: transparent;background: transparent;" name="DateOrdered Input"></td>
                                                        <td id="SuppName-InputEntry"><input class="bg-white border rounded border-white" type="text" id="SuppName-Input" placeholder="Input Supplier Name" name="SuppName Input" style="width: 100%;height: 100%;padding-bottom: 0px;padding-top: 0px;border-color: transparent;background: transparent;background-color: transparent;"
                                                                autocomplete="on"></td>
                                                        <td id="MoP-InputEntry"><select id="MoP-Input" style="border-color: transparent;background: transparent;font-family: Nunito, sans-serif;" name="MoP Input"><optgroup label="This is a group"><option value="12" selected="">This is item 1</option><option value="13">This is item 2</option><option value="14">This is item 3</option></optgroup></select></td>
                                                        <td
                                                            id="Courier-InputEntry"><select id="Courier-Input" style="border-color: transparent;background: transparent;font-family: Nunito, sans-serif;" name="Courier Input"><optgroup label="This is a group"><option value="12" selected="">This is item 1</option><option value="13">This is item 2</option><option value="14">This is item 3</option></optgroup></select></td>
                                                            <td
                                                                id="Status-InputEntry"><select id="Status-Input" style="border-color: transparent;background: transparent;font-family: Nunito, sans-serif;" name="Status Input"><optgroup label="This is a group"><option value="12" selected="">This is item 1</option><option value="13">This is item 2</option><option value="14">This is item 3</option></optgroup></select></td>
                                                    </tr>
                                                </tbody>
                                                <tfoot id="AddTable-Footer" style="background-color: #dcdcdc;">
                                                    <tr class="text-center" id="AddTable-FooterRow">
                                                        <td><strong>PO #</strong></td>
                                                        <td><strong>Date Ordered</strong></td>
                                                        <td class="text-left"><strong>Supplier Name</strong></td>
                                                        <td style="font-weight: bold;">Mode of Payment</td>
                                                        <td style="font-weight: bold;">Courier</td>
                                                        <td><strong>Status</strong></td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="modal-footer" id="Add-ModalFooter"><button class="btn btn-light text-danger" id="Add-CancelButton" data-dismiss="modal" type="button" style="font-family: 'Open Sans', sans-serif;">Cancel</button><button class="btn btn-success" id="Add-ConfirmButton"
                                            type="button" style="font-family: 'Open Sans', sans-serif;padding-right: 25px;padding-left: 25px;border-radius: 50px 10px;">CONFIRM</button></div>
                                </div>
                            </div>
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
</body>
<script>
  function addProduct() {
    var tableRef = document.getElementById('itemt');
    var btnRef = document.getElementById('btnRow');
    var trRef = document.getElementById('itemr');
    var clone = trRef.cloneNode(true);
    clone.deleteCell(4);
    var minus = clone.insertCell(4);
    minus.innerHTML = "<button type='button' onclick='deleteProduct(this)'>-</button>";
    var check = clone.querySelectorAll("input");

    for (i = 0; i < check.length; i++) {
      check[i].value = "";
    }

    tableRef.appendChild(clone);
  }

  function deleteProduct(btn) {
    var row = btn.parentNode.parentNode;
    row.parentNode.removeChild(row);
  }

  function multiply(val) {
    var tableRef = document.getElementById('itemt');
    var amount = document.getElementById('amt');
    var row = val.parentNode.parentNode;
    var qty = row.cells[1].childNodes[0].value;
    var price = row.cells[2].childNodes[0].value;

    if (isNaN(qty.value) && isNaN(price.value)) {
      var mult = qty * price;
      row.deleteCell(3);
      var change = row.insertCell(3);
      change.innerHTML = "<input type='text' disabled value='" + mult + "'>";
    }
  }
  function isChecked(){
    var li = document.getElementById("idlist");
    var tableRef = document.getElementById("pot");
    var checked = document.getElementById("checked");
    var array = [];
    var checkboxes = tableRef.querySelectorAll('input[type=checkbox]:checked');
    var msg = document.getElementById('none');
    if (checkboxes.length == 0){
      msg.style.display = "block";
      checked.style.display = "none";
    }
    else{
      checked.style.display = "block";
      msg.style.display = "none";
    }
  }
</script>
</html>
