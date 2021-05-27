<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>LazeRosa - Reports: Shrinkage</title>
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
                                <a class="dropdown-item d-block" role="presentation" id="TotSalesEx-Link" href="Reports_Total.php" style="height: 50px;margin-top: 5px;"><span id="TotSalesEx-Text">Total Sales &amp; Expenses</span></a>
                                <a class="dropdown-item d-block" role="presentation" id="DamRet-Link" href="Reports_Shrink.php" style="height: 50px;margin-top: 5px;width: auto;"><span id="DamRet-Text">Shrinkages</span></a></div>
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
            <div class="nav-item dropdown no-arrow" id="User-Profile-Frame"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" id="User-Profile-Link" href="#"><span class="d-none d-lg-inline mr-2 text-gray-600 small" id="User-Message" style="font-family: ABeeZee, sans-serif;color: rgb(0,0,0);font-size: 17px;">Hello,&nbsp;<span class="d-none d-lg-inline mr-2 text-gray-600 small" id="Username" style="font-family: ABeeZee, sans-serif;color: rgb(0,0,0);font-size: 17px;">Patrick</span><span class="d-none d-lg-inline mr-2 text-gray-600 small" id="Welcome-ExclPt" style="font-family: ABeeZee, sans-serif;color: rgb(0,0,0);font-size: 17px;">!</span></span><img class="border rounded-circle img-profile" data-bs-hover-animate="tada" id="User-Avatar" src="assets/img/SYSTIMP/Avatar.jpeg" style="width: 50px;height: 50px;"></a>
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
        <div class="d-sm-flex align-items-center mb-4" id="Page-Header" style="width: 100%;">
            <h3 class="text-dark mb-0" id="Page-Header-Title" style="color: rgb(0,0,0);font-family: ABeeZee, sans-serif;font-weight: bold;font-size: 2.5vw;">Reports: Shrinkage Report</h3>
        </div>
        <hr>
        <div class="row" id="ReportsContent-Row" style="width: auto;">
            <div class="col-lg-5 col-xl-4" id="Reports-TimelineSelection-Column">
                <div class="card shadow mb-4" id="Reports-TimelineSelection-Card">
                    <div class="card-header py-3" id="Reports-TimelineSelection-Header" style="background-color: rgb(101,118,122);/*background: linear-gradient(to right, #2657eb, #de6161);*/">
                        <p class="text-left m-0 font-weight-bold" id="Reports-TimelineSelection-HeaderTitle" style="font-size: 1.3vw;font-weight: bold;font-family: 'Open Sans', sans-serif;color: #ffffff;">Timeline Selection</p>
                    </div>
                    <div class="card-body" id="Reports-TimelineSelection-Card" style="width: 100%;padding-right: 5px;">
                        <div class="row" id="Reports-StartRange-Row" style="width: 100%;">
                            <div class="col" id="Reports-StartRange-Column" style="width: 100%;"><label class="col-form-label" id="Reports-StartRange" style="margin-top: 0px;margin-bottom: 0px;width: 100%;font-size: 1.3vw;">Starting Range:&nbsp;<input class="border rounded border-dark float-right" id="Reports-StartRange-Input" type="date" style="width: 12vw;border-radius: 20px;padding-left: 0px;" name="StartRange"></label></div>
                        </div>
                        <hr>
                        <div class="row" id="Reports-EndRange-Row" style="width: 100%;">
                            <div class="col" id="Reports-EndRange-Column" style="width: 100%;"><label class="col-form-label" id="Reports-EndRange" style="margin-top: 0px;margin-bottom: 0px;width: 100%;font-size: 1.3vw;">Ending Range:&nbsp;<input class="border rounded border-dark float-right" id="Reports-EndRange-Input" type="date" style="width: 12vw;margin-right: 0;margin-left: 0;border-radius: 20px;padding-left: 0px;" name="EndRange"></label></div>
                        </div>
                        <hr>
                        <hr>
                        <hr><button class="btn btn-success" id="GenerateReport-Button" type="button" style="font-family: 'Open Sans', sans-serif;font-weight: normal;border-radius: 50px 10px;padding-right: 25px;padding-left: 25px;border-width: 2px;width: 100%;font-size: 1.3vw;">GENERATE REPORT</button>
                        <hr><button class="btn btn-secondary" id="PrintReport-Button" type="button" style="font-family: 'Open Sans', sans-serif;font-weight: normal;border-radius: 50px 10px;padding-right: 25px;padding-left: 25px;border-width: 2px;width: 100%;font-size: 1.3vw;">PRINT GENERATED REPORT</button></div>
                </div>
            </div>
            <div class="col-lg-7 col-xl-8" id="Reports-GeneratedReport-Column" style="width: 100vw;">
                <div class="card shadow mb-4" id="Reports-GeneratedReport-Card" style="width: 100%;">
                    <div class="card-header py-3" id="Reports-GeneratedReport-Header" style="background-color: rgb(101,118,122);/*background: linear-gradient(to right, #2657eb, #de6161);*/">
                        <p class="text-left m-0 font-weight-bold" id="Reports-GeneratedReport-HeaderTitle" style="font-size: 1.3vw;font-weight: bold;font-family: 'Open Sans', sans-serif;color: #ffffff;">Generated Report</p>
                    </div>
                    <div class="card-body" id="Reports-GeneratedReport-CardBody" style="width: 100%;">
                        <div class="row" id="GeneratedReport-ReportHeader">
                            <div class="col" id="GeneratedReport-LogoTitle-Column" style="width: 100%;">
                                <div class="row" id="GeneratedReport-Logo-Row">
                                    <div class="col" id="GeneratedReport-Logo-Column" style="padding-left: 0vw;"><img id="GeneratedReport-Logo" src="assets/img/SYSTIMP/LazeBeauty%20Circle.png" style="width: 13vw;margin-left: 1vw;"></div>
                                </div>
                                <div class="row" id="GeneratedReport-Title-Row">
                                    <div class="col" id="GeneratedReport-Title-Column"><span id="GeneratedReport-Title" style="font-weight: bold;color: rgb(0,0,0);font-family: 'Open Sans', sans-serif;font-size: 2.3vw;margin-left: 1vw;">LazeBeauty</span></div>
                                </div>
                                <div class="row" id="GeneratedReport-Details-Row">
                                    <div class="col" id="GeneratedReport-Details-Column">
                                        <div class="row" id="GeneratedReport-Details-AddressColumn" style="padding-right: 12px;padding-left: 12px;"><span id="GeneratedReport-Details-Address" style="font-weight: normal;color: rgb(0,0,0);font-family: 'Open Sans', sans-serif;font-size: 1.4vw;margin-left: 1vw;">Address :&nbsp;501 Emerald Bldg. Rosewood Pointe Condominium, Ususan, Taguig City 1632<br></span></div>
                                        <div
                                            class="row" id="GeneratedReport-Details-ContactColumn" style="padding-right: 12px;padding-left: 12px;"><span id="GeneratedReport-Details-Contact" style="font-weight: normal;color: rgb(0,0,0);font-family: 'Open Sans', sans-serif;font-size: 1.4vw;margin-left: 1vw;">Mobile No :&nbsp;0917 823 2964 <br></span></div>
                                    <div
                                        class="row" id="GeneratedReport-Details-EmailColumn" style="padding-right: 12px;padding-left: 12px;"><span id="GeneratedReport-Details-Email" style="font-weight: normal;color: rgb(0,0,0);font-family: 'Open Sans', sans-serif;font-size: 1.4vw;margin-left: 1vw;">Email :&nbsp;skateeonline@yahoo.com<br></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col offset-xl-0" id="GeneratedReport-ReportDetails" style="width: 100%;">
                        <div class="row" id="GeneratedReport-ReportTitle-Row">
                            <div class="col-auto col-xl-10 offset-xl-2" id="GeneratedReport-ReportTitle-Col" style="padding-right: 0px;padding-left: 0px;width: auto;"><span class="text-right float-right" id="GeneratedReport-ReportTitle-ReportType" style="font-family: 'Open Sans', sans-serif;font-size: 3vw;font-weight: bold;color: rgb(0,0,0);width: auto;margin-right: 1vw;">Shrinkage Report</span></div>
                        </div>
                        <div class="row" id="GeneratedReport-StartRange-Row" style="margin-top: 20px;">
                            <div class="col-xl-5" id="GeneratedReport-StartRange-FromCol" style="margin-left: 8vw;"><span class="float-right" id="GeneratedReport-StartRange-FromLabel" style="font-family: 'Open Sans', sans-serif;color: rgb(0,0,0);font-size: 1.3vw;font-weight: bold;">FROM:</span></div>
                            <div class="col" id="GeneratedReport-StartRange-DateCol"
                                style="padding-right: 1vw;"><span class="float-right" id="GeneratedReport-StartRange-Date" style="font-family: 'Open Sans', sans-serif;color: rgb(0,0,0);font-size: 1.3vw;font-weight: normal;">StartDate</span></div>
                        </div>
                        <div class="row" id="GeneratedReport-EndRange-Row">
                            <div class="col-xl-5" id="GeneratedReport-EndRange-ToCol" style="margin-left: 8vw;"><span class="float-right" id="GeneratedReport-EndRange-ToLabel" style="font-family: 'Open Sans', sans-serif;color: rgb(0,0,0);font-size: 1.3vw;font-weight: bold;">TO:</span></div>
                            <div class="col" id="GeneratedReport-EndRange-DateCol"
                                style="padding-right: 1vw;"><span class="float-right" id="GeneratedReport-EndRange-Date" style="font-family: 'Open Sans', sans-serif;color: rgb(0,0,0);font-size: 1.3vw;font-weight: normal;">EndDate</span></div>
                        </div>
                        <div class="row" id="GeneratedReport-Generated-Row">
                            <div class="col-xl-5" id="GeneratedReport-Generated-LabelCol" style="margin-left: 8vw;"><span class="float-right" id="GeneratedReport-Generated-Label" style="font-family: 'Open Sans', sans-serif;color: rgb(0,0,0);font-size: 1.3vw;font-weight: bold;">GENERATED ON:</span></div>
                            <div class="col" id="GeneratedReport-Generated-DateCol"
                                style="padding-right: 1vw;"><span class="float-right" id="GeneratedReport-Generated-Date" style="font-family: 'Open Sans', sans-serif;color: rgb(0,0,0);font-size: 1.3vw;font-weight: normal;">TodayDate<script>
        var today = new Date();
    
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
        var yyyy = today.getFullYear();

        today = mm + '/' + dd + '/' + yyyy;
        
        document.getElementById("GeneratedReport-Generated-Date").innerHTML = today;
</script></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" id="GeneratedReport-Report-Card" style="margin-top: 2vw;margin-bottom: 2vw;">
                    <div class="table-responsive table mt-2" id="GeneratedReport-TableFrame" role="grid" aria-describedby="dataTable_info" style="margin-right: 1vw;margin-left: 1vw;">
                        <table class="table my-0" id="GeneratedReport-Table">
                            <thead id="Table-Header">
                                <tr class="text-center" id="Table-HeaderRow" style="background-color: #3e3e3e;font-family: 'Open Sans', sans-serif;color: rgb(255,255,255);/*background: linear-gradient(to right, #2657eb, #de6161);*/font-size: 0.8vw;">
                                    <th style="width: 85px;">#</th>
                                    <th style="width: 10vw;">Adjust Date&nbsp;</th>
                                    <th class="text-left" style="width: 25.62225475841874vw;">Product Name</th>
                                    <th style="width: 14.641288433382138vw;">Brand</th>
                                    <th style="width: 6.295754026354319vw;">Original<br>Quantity</th>
                                    <th style="width: 6.295754026354319vw;">Adjusted<br>Quantity</th>
                                    <th style="width: 15vw;">Difference</th>
                                    <th style="width: 10vw;">Cost Amount</th>
                                </tr>
                            </thead>
                            <tbody id="Table-Body">
                                <tr class="text-center" id="Table-Row" style="font-family: 'Open Sans', sans-serif;font-size: 0.8vw;">
                                    <td id="EntryNum-Entry">#</td>
                                    <td id="Date-Entry">AdjDate</td>
                                    <td class="text-left" id="ProdName-Entry">ProductName</td>
                                    <td id="Brand-Entry">Brand</td>
                                    <td id="OrigQTY-Entry">O_QTY</td>
                                    <td id="AdjQTY-Entry">A_QTY</td>
                                    <td id="Difference-Entry">Difference</td>
                                    <td id="Amount-Entry">CostAmount</td>
                                </tr>
                            </tbody>
                            <tfoot id="Table-Footer" style="background-color: #dcdcdc;">
                                <tr class="text-center" id="Table-FooterRow" style="color: rgb(0,0,0);/*background: linear-gradient(to right, rgba(38,87,235,0.49), rgba(222,97,97,0.5));*/background-color: #d0d0d0;">
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td id="GeneratedReport-Table-TotalCostLabelCell" style="width: 170px;"><strong class="float-right" id="GeneratedReport-Table-TotalSalesLabel" style="font-family: 'Open Sans', sans-serif;font-size: 1.1vw;">TOTAL COST :</strong></td>
                                    <td id="GeneratedReport-Table-TotalSalesCell"><strong id="GeneratedReport-Table-TotalSalesCurrency" style="font-family: 'Open Sans', sans-serif;font-size: 1.1vw;margin-right: 0.5vw;">P</strong><strong id="GeneratedReport-Table-TotalSalesValue" style="font-family: 'Open Sans', sans-serif;font-size: 1.1vw;">XX,XXX.XX</strong></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class="row" id="GeneratedReport-Footer-Card" style="margin-top: 2vw;margin-bottom: 2vw;">
                    <div class="col" id="GeneratedReport-Footer-Details">
                        <div class="row" id="GeneratedReport-Footer-SignagesRow">
                            <div class="col d-xl-flex justify-content-xl-center" id="GeneratedReport-Footer-Col1"><span id="GeneratedReport-Footer-PreparedBy" style="font-weight: normal;color: rgb(0,0,0);font-family: 'Open Sans', sans-serif;font-size: 1.1vw;margin-left: 1vw;">Prepared by: <br><br><br><span style="text-decoration: underline;">________________________________________</span></span>
                            </div>
                            <div class="col d-xl-flex justify-content-xl-center" id="GeneratedReport-Footer-Col2"><span id="GeneratedReport-Footer-NotedBy" style="font-weight: normal;color: rgb(0,0,0);font-family: 'Open Sans', sans-serif;font-size: 1.1vw;margin-left: 1vw;">Noted by: <br><br><br><span style="text-decoration: underline;">________________________________________</span><br></span>
                            </div>
                        </div>
                        <div class="row" id="GeneratedReport-Footer-PageNumRow" style="margin-top: 15vh;">
                            <div class="col d-xl-flex justify-content-xl-end" id="GeneratedReport-PageNum-Col"><span id="GeneratedReport-PageNum-Label1" style="font-weight: normal;color: rgb(0,0,0);font-family: 'Open Sans', sans-serif;font-size: 1vw;">Page&nbsp;</span><span id="GeneratedReport-PageNum-CurrPage" style="font-weight: normal;color: rgb(0,0,0);font-family: 'Open Sans', sans-serif;font-size: 1vw;">X</span>
                                <span
                                    id="GeneratedReport-PageNum-Label2" style="font-weight: normal;color: rgb(0,0,0);font-family: 'Open Sans', sans-serif;font-size: 1vw;">&nbsp;of&nbsp;</span><span id="GeneratedReport-PageNum-MaxPage" style="font-weight: normal;color: rgb(0,0,0);font-family: 'Open Sans', sans-serif;font-size: 1vw;">X</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" id="GeneratedReport-PageNav-Row">
            <div class="col-md-6 col-xl-12" id="GeneratedReport-PageNav-Frame">
                <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers" id="GeneratedReport-PageNav-Bar">
                    <ul class="pagination" id="GeneratedReport-PageNav">
                        <li class="page-item disabled" id="GeneratedReport-PageNav-Prev"><a class="page-link" href="#" aria-label="Previous" id="GeneratedReport-PageNav-Prev-Link"><span aria-hidden="true">«</span></a></li>
                        <li class="page-item active" id="GeneratedReport-PageNav-P1"><a class="page-link" href="#" id="GeneratedReport-PageNav-P1-Link">1</a></li>
                        <li class="page-item" id="GeneratedReport-PageNav-P2"><a class="page-link" href="#" id="GeneratedReport-PageNav-P2-Link">2</a></li>
                        <li class="page-item" id="GeneratedReport-PageNav-P3"><a class="page-link" href="#" id="GeneratedReport-PageNav-P3-Link">3</a></li>
                        <li class="page-item" id="GeneratedReport-PageNav-Next"><a class="page-link" href="#" aria-label="Next" id="GeneratedReport-PageNav-Next-Link"><span aria-hidden="true">»</span></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    </div>
    <div></div>
    </div>
    </div>
    <footer class="bg-white sticky-footer" id="Footer" style="background: linear-gradient(to bottom, rgba(255, 255, 255, 0.5), rgba(148, 148, 148, 0.5));width: 100%;">
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