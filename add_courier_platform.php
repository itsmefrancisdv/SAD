
<?php
require_once("connect.php"); 

if(isset($_POST['submit'])){
   $courier = $_POST['add_courier'];
   $platform = $_POST['add_platform'];

   if(!empty($courier)){
    $add_courier = "INSERT INTO courier (courierName) VALUES ('$courier')";
    mysqli_query($DBConnect, $add_courier) or die (mysqli_error($DBConnect));
   }
   
   if(!empty($platform)){
    $add_platform = "INSERT INTO platform (platformName) VALUES ('$platform')";
    mysqli_query($DBConnect, $add_platform) or die (mysqli_error($DBConnect));
   }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>LazeRosa - Admin</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee">
    <link rel="stylesheet" href="assets/css/Jost.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/material-icons.min.css">
    <link rel="stylesheet" href="assets/css/breadcrumb.css">
    <link rel="stylesheet" href="assets/css/customtable.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/sticky-dark-top-nav-with-dropdown-1.css">
    <link rel="stylesheet" href="assets/css/sticky-dark-top-nav-with-dropdown.css">
</head>

<body id="page-top">
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
                            <a class="dropdown-item d-block" role="presentation" id="DamRet-Link" href="Reports_DamRet.html" style="height: 50px;margin-top: 5px;width: auto;"><span id="DamRet-Text">Shrinkages</span></a></div>
            </li>
                                </ul>
                            </div>
                        </div>
                    </form>
                    <ul class="nav navbar-nav flex-nowrap ml-auto" id="Header-Personal">
                        <li class="nav-item dropdown d-sm-none no-arrow" id="Personal-Section"><a
                                    class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false"
                                    href="#"><i class="fas fa-search"></i></a>
                            <div class="dropdown-menu dropdown-menu-right p-3 animated--grow-in" role="menu"
                                 aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto navbar-search w-100">
                                    <div class="input-group"><input class="bg-light form-control border-0 small"
                                                                    type="text" placeholder="Search for ...">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary py-0" type="button"><i
                                                        class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <li class="nav-item dropdown no-arrow mx-1" role="presentation" id="Notification">
                            <div class="nav-item dropdown no-arrow" id="Notification-DD"><a
                                        class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false"
                                        data-bs-hover-animate="swing" id="Notification-Link" href="#"><span
                                            id="Notification-Counter" class="badge badge-danger badge-counter">3+</span><img
                                            id="Notification-Bell" style="width: 25px;height: 25px;"
                                            src="assets/img/SYSTIMP/Notifications%20(Icon).png"></a>
                                <div
                                        class="dropdown-menu dropdown-menu-right dropdown-list dropdown-menu-right animated--grow-in"
                                        role="menu" id="Notification-Menu">
                                    <h6 id="Notification-DDHeader" class="dropdown-header"
                                        style="background-color: #ffafaf;font-family: Nunito, sans-serif;font-size: 12px;color: rgb(0,0,0);">
                                        NOTIFICATION center</h6>
                                    <a class="d-flex align-items-center dropdown-item" id="Report-Notification-Item"
                                       href="#">
                                        <div id="Report-NotifItem-Type" class="mr-3">
                                            <div class="bg-primary icon-circle" id="Report-NotifItem-TypeCircleFrame"><i
                                                        class="fas fa-file-alt text-white"
                                                        id="Report-NotifItem-TypeIcon"></i></div>
                                        </div>
                                        <div id="Report-NotifItem-Details"><span id="Report-NotifItem-Date"
                                                                                 class="small text-gray-500">December 12, 2019</span>
                                            <p id="Report-NotifItem-Description">A new monthly report is ready to
                                                download!</p>
                                        </div>
                                    </a>
                                    <a class="d-flex align-items-center dropdown-item" id="Finance-Notification-Item"
                                       href="#">
                                        <div id="Finance-NotifItem-Type" class="mr-3">
                                            <div class="bg-success icon-circle" id="Finance-NotifItem-TypeCircleFrame">
                                                <i class="fas fa-donate text-white" id="Finance-NotifItem-TypeIcon"></i>
                                            </div>
                                        </div>
                                        <div id="Finance-NotifItem-Details"><span id="Finance-NotifItem-Date"
                                                                                  class="small text-gray-500">December 7, 2019</span>
                                            <p id="Finance-NotifItem-Description">$290.29 has been deposited into your
                                                account!</p>
                                        </div>
                                    </a>
                                    <a class="d-flex align-items-center dropdown-item" id="Alert-Notification-Item"
                                       href="#">
                                        <div id="Alert-NotifItem-Type" class="mr-3">
                                            <div class="bg-warning icon-circle" id="Alert-NotifItem-TypeCircleFrame"><i
                                                        class="fas fa-exclamation-triangle text-white"
                                                        id="Alert-NotifItem-TypeIcon"></i></div>
                                        </div>
                                        <div id="Alert-NotifItem-Details"><span id="Alert-NotifItem-Date"
                                                                                class="small text-gray-500">December 2, 2019</span>
                                            <p id="Alert-NotifItem-Description">Spending Alert: We've noticed unusually
                                                high spending for your account.</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <div class="d-none d-sm-block topbar-divider" id="Header-Divider"></div>
                        <li class="nav-item dropdown no-arrow" role="presentation" id="User-Profile-Dropdown">
                            <div class="nav-item dropdown no-arrow" id="User-Profile-Frame"><a
                                        class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false"
                                        id="User-Profile-Link" href="#"><span
                                            class="d-none d-lg-inline mr-2 text-gray-600 small" id="User-Message"
                                            style="font-family: ABeeZee, sans-serif;color: rgb(0,0,0);font-size: 17px;">Hello,&nbsp;<span
                                                class="d-none d-lg-inline mr-2 text-gray-600 small" id="Username"
                                                style="font-family: ABeeZee, sans-serif;color: rgb(0,0,0);font-size: 17px;">Patrick</span><span
                                                class="d-none d-lg-inline mr-2 text-gray-600 small" id="Welcome-ExclPt"
                                                style="font-family: ABeeZee, sans-serif;color: rgb(0,0,0);font-size: 17px;">!</span></span><img
                                            class="border rounded-circle img-profile" data-bs-hover-animate="tada"
                                            id="User-Avatar" src="assets/img/Avatar.jpeg"
                                            style="width: 50px;height: 50px;"></a>
                                <div
                                        class="dropdown-menu shadow dropdown-menu-right animated--grow-in" role="menu"
                                        id="UserProfile-DD"><a class="dropdown-item" role="presentation"
                                                               id="UserProfile-DDItem-Profile" href="#"
                                                               style="font-family: ABeeZee, sans-serif;"><i
                                                class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"
                                                id="UserProfile-DDItem-ProfileIcon"></i>&nbsp;Profile</a>
                                    <a
                                            class="dropdown-item" role="presentation" id="UserProfile-DDItem-Settings"
                                            href="#" style="font-family: ABeeZee, sans-serif;"><i
                                                class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"
                                                id="UserProfile-DDItem-SettingsIcon"></i>&nbsp;Settings</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" role="presentation" id="UserProfile-DDItem-Logout"
                                       href="index.html" style="font-family: ABeeZee, sans-serif;color: rgb(255,15,0);"><img
                                                id="UserProfile-DDItem-LogoutIcon"
                                                style="width: 15px;height: 15px;margin-right: 8px;"
                                                src="assets/img/SYSTIMP/Logout%20(Icon).png">&nbsp;Logout</a></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
    <form method="POST">
    <div class="container-fluid" id="Page-Content" style="min-height: 100%;height: 100%;">
        <div class="d-sm-flex align-items-center mb-4" id="Page-Header">
            <h3 class="text-dark mb-0" id="Page-Header-Title" style="color: rgb(0,0,0);font-family: ABeeZee, sans-serif;font-weight: bold;font-size: 2.5vw;">Welcome, Administrator !</h3>
        </div>
        <div class="row" id="AdminTools-Row1">
            <div class="col-md-6 col-xl-6 mb-4" id="AdminTools-Col1">
                <div class="card shadow border-left-primary py-2" id="AdminTools-CourierCard">
                    <div class="card-body" id="AdminTools-CourierCardBody">
                        <div class="row align-items-center no-gutters" id="Courier-CardBody-Content">
                            <div class="col-xl-12 mr-2" id="Courier-CardBody-Column" style="width: 100%;">
                                <div class="text-uppercase text-primary font-weight-bold text-xs mb-1" id="Courier-CardBody-Header"><span id="Courier-CardBody-HeaderTitle" style="font-size: 2vw;">ADD COURIER</span></div>
                                <div class="text-dark font-weight-bold h5 mb-0" id="Courier-CardBody-Input"><input class="border rounded border-dark" type="text" id="Courier-CardBody-InputValue" style="border-radius: 20px;margin-left: 0px;width: 100%;margin-top: 0.2vw;margin-bottom: 0.2vw;height: auto;font-size: 2.5vw;" name="add_courier"
                                        placeholder="Input Courier"></div>
                                <div class="text-dark font-weight-bold h5 mb-0" id="Courier-CardBody-Add" style="height: auto;"><button class="btn btn-success float-right" id="Courier-CardBody-AddButton" data-toggle="modal" type="submit" name ="submit" style="font-family: 'Open Sans', sans-serif;font-weight: normal;border-radius: 50px 10px;padding-right: 25px;padding-left: 25px;border-width: 2px;margin-top: 0.5vw;width: 15vw;font-size: 1.8vw;color: rgb(255,255,255);">ADD</button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-6 mb-4" id="AdminTools-Col2">
                <div class="card shadow border-left-success py-2" id="AdminTools-PlatformCard">
                    <div class="card-body" id="AdminTools-PlatformCardBody">
                        <div class="row align-items-center no-gutters" id="Platform-CardBody-Content">
                            <div class="col-xl-12 mr-2" id="Platform-CardBody-Column">
                                <div class="text-uppercase text-primary font-weight-bold text-xs mb-1" id="Platform-CardBody-Header"><span id="Platform-CardBody-Header-Title" style="font-size: 2vw;color: #1cc88a;">ADD PLATFORM</span></div>
                                <div class="text-dark font-weight-bold h5 mb-0" id="Platform-CardBody-Input"><input class="border rounded border-dark" type="text" id="Platform-CardBody-InputValue" style="border-radius: 20px;margin-left: 0px;width: 100%;margin-top: 0.2vw;margin-bottom: 0.2vw;height: auto;font-size: 2.5vw;" name="add_platform"
                                        placeholder="Input Courier"></div>
                                <div class="text-dark font-weight-bold h5 mb-0" id="Platform-CardBody-Add"><button class="btn btn-success float-right" id="Platform-CardBody-AddButton" data-toggle="modal" type="submit" name="submit" style="font-family: 'Open Sans', sans-serif;font-weight: normal;border-radius: 50px 10px;padding-right: 25px;padding-left: 25px;border-width: 2px;margin-top: 0.5vw;width: 15vw;font-size: 1.8vw;color: rgb(255,255,255);">ADD</button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" id="AdminTools-Row2">
            <div class="col-md-6 col-xl-6 mb-4" id="AdminTools-Col3">
                <div class="card shadow border-left-info py-2" id="AdminTools-CustCard">
                    <div class="card-body" id="Cust-CardBody">
                        <div class="row align-items-center no-gutters" id="Cust-CardBody-Content">
                            <div class="col-xl-12 mr-2" id="Cust-CardBody-Column" style="width: 100%;">
                                <div class="text-uppercase text-primary font-weight-bold text-xs mb-1" id="Cust-CardBody-Header"><span id="Cust-CardBody-HeaderTitle" style="font-size: 2vw;color: #36b9cc;">ADD CUSTOMER</span></div>
                                <div class="text-dark d-flex font-weight-bold h5 mb-0" id="Cust-CardBody-GoTo"><a class="btn btn-info d-xl-flex justify-content-xl-center align-items-xl-center" role="button" id="Cust-CardBody-GoToButton" href="customercreate.php" style="font-family: 'Open Sans', sans-serif;font-weight: normal;border-radius: 50px 10px;padding-right: 25px;padding-left: 25px;border-width: 2px;margin-top: 0.5vw;width: 20vw;font-size: 1.7vw;margin-right: auto;margin-left: auto;color: rgb(255,255,255);height: 10vh;">GO TO PAGE</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-6 mb-4" id="AdminTools-Col3">
                <div class="card shadow border-left-warning py-2" id="AdminTools-SuppCard">
                    <div class="card-body" id="Supp-CardBody">
                        <div class="row align-items-center no-gutters" id="Supp-CardBody-Content">
                            <div class="col-xl-12 mr-2" id="Supp-CardBody-Column" style="width: 100%;">
                                <div class="text-uppercase text-primary font-weight-bold text-xs mb-1" id="Supp-CardBody-Header"><span id="Supp-CardBody-HeaderTitle" style="font-size: 2vw;color: #f6c23e;">ADD SUPPLIER</span></div>
                                <div class="text-dark d-flex font-weight-bold h5 mb-0" id="Supp-CardBody-GoTo"><a class="btn btn-warning d-xl-flex justify-content-xl-center align-items-xl-center" role="button" id="Supp-CardBody-GoToButton" href="AddSupplier.php" style="font-family: 'Open Sans', sans-serif;font-weight: normal;border-radius: 50px 10px;padding-right: 25px;padding-left: 25px;border-width: 2px;margin-top: 0.5vw;width: 20vw;font-size: 1.7vw;margin-right: auto;margin-left: auto;color: rgb(255,255,255);height: 10vh;">GO TO PAGE</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div></div>
    </div>
    </div>
    </form>
    <footer class="bg-white sticky-footer" id="Footer" style="background: linear-gradient(to bottom, rgba(255, 255, 255, 0.5), rgba(148, 148, 148, 0.5));">
        <div class="container my-auto">
            <div class="text-center my-auto copyright"><span>LazeRosa Systems || by Group 3</span></div>
        </div>
    </footer>
    </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>