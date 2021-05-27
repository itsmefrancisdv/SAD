<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>LazeRosa - Home</title>
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
        <div class="d-sm-flex align-items-center mb-4" id="Page-Header">
            <h3 class="text-dark mb-0" id="Page-Header-Title" style="color: rgb(0,0,0);font-family: ABeeZee, sans-serif;font-weight: bold;font-size: 2.5vw;">Welcome Home, Patrick !</h3>
        </div>
        <div class="row" id="Dashboard-Income-Row">
            <div class="col-lg-7 col-xl-6" id="MonthlyIncome-Col">
                <div class="card shadow mb-4" id="MonthlyIncome-Card">
                    <div class="card-header d-flex justify-content-between align-items-center" id="MonthlyIncome-Card-Header" style="background-color: #3e3e3e;padding-top: 1vw;padding-bottom: 1vw;padding-right: 1vw;padding-left: 1vw;">
                        <h6 id="MonthlyIncome-Card-HeaderTitle" class="font-weight-bold m-0" style="color: #ffffff;font-size: 2vw;font-family: 'Open Sans', sans-serif;">Monthly Income</h6>
                        <div class="dropdown no-arrow" id="MonthlyIncome-Actions"><button class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false" id="MonthlyIncome-Actions-Button" type="button"><i class="fas fa-ellipsis-v text-gray-400" id="MonthlyIncome-Actions-ButtonIcon"></i></button>
                            <div
                                class="dropdown-menu shadow dropdown-menu-right animated--fade-in" role="menu" id="MonthlyIncome-Actions-Menu">
                                <p class="text-center dropdown-header" id="MonthlyIncome-Actions-MenuHeader">Action Items :</p><a class="dropdown-item" role="presentation" id="MonthlyIncome-Actions-MenuItem-1" href="#">&nbsp;Print</a></div>
                    </div>
                </div>
                <div class="card-body" id="MonthlyIncome-Card-Body">
                    <div id="MonthlyIncome-Card-IncomeChart" class="chart-area"><canvas data-bs-chart="{&quot;type&quot;:&quot;line&quot;,&quot;data&quot;:{&quot;labels&quot;:[&quot;Jan&quot;,&quot;Feb&quot;,&quot;Mar&quot;,&quot;Apr&quot;,&quot;May&quot;,&quot;Jun&quot;,&quot;Jul&quot;,&quot;Aug&quot;],&quot;datasets&quot;:[{&quot;label&quot;:&quot;Earnings&quot;,&quot;fill&quot;:true,&quot;data&quot;:[&quot;0&quot;,&quot;10000&quot;,&quot;5000&quot;,&quot;15000&quot;,&quot;10000&quot;,&quot;20000&quot;,&quot;15000&quot;,&quot;25000&quot;],&quot;backgroundColor&quot;:&quot;rgba(78, 115, 223, 0.05)&quot;,&quot;borderColor&quot;:&quot;rgba(78, 115, 223, 1)&quot;}]},&quot;options&quot;:{&quot;maintainAspectRatio&quot;:false,&quot;legend&quot;:{&quot;display&quot;:false},&quot;title&quot;:{},&quot;scales&quot;:{&quot;xAxes&quot;:[{&quot;gridLines&quot;:{&quot;color&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;zeroLineColor&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;drawBorder&quot;:false,&quot;drawTicks&quot;:false,&quot;borderDash&quot;:[&quot;2&quot;],&quot;zeroLineBorderDash&quot;:[&quot;2&quot;],&quot;drawOnChartArea&quot;:false},&quot;ticks&quot;:{&quot;fontColor&quot;:&quot;#858796&quot;,&quot;padding&quot;:20}}],&quot;yAxes&quot;:[{&quot;gridLines&quot;:{&quot;color&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;zeroLineColor&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;drawBorder&quot;:false,&quot;drawTicks&quot;:false,&quot;borderDash&quot;:[&quot;2&quot;],&quot;zeroLineBorderDash&quot;:[&quot;2&quot;]},&quot;ticks&quot;:{&quot;fontColor&quot;:&quot;#858796&quot;,&quot;padding&quot;:20}}]}}}"></canvas></div>
                </div>
            </div>
        </div>
        <div class="col-lg-7 col-xl-6" id="OverallIncome-Col">
            <div class="card shadow mb-4" id="OverallIncome-Card">
                <div class="card-header py-3" id="OverallIncome-Card-Header" style="background-color: #3e3e3e;/*background: linear-gradient(to right, #2657eb, #de6161);*/">
                    <p class="text-center m-0 font-weight-bold" id="OverallIncome-Card-HeaderTitle" style="font-size: 2vw;font-weight: bold;font-family: 'Open Sans', sans-serif;color: #ffffff;">Overall Income</p>
                    <div class="row" id="OverallIncome-Card-HeaderDetails">
                        <div class="col" id="OverallIncome-Card-HeaderDetail-1">
                            <p class="text-right m-0 font-weight-bold" id="OverallIncome-Card-Header-TodayDate-Label" style="font-size: 1.3vw;width: 100%;font-family: 'Open Sans', sans-serif;color: #dddddd;font-weight: normal;">As of TODAY:&nbsp;</p>
                        </div>
                        <div class="col" id="OverallIncome-Card-HeaderDetail-2">
                            <p class="text-left m-0 font-weight-bold" id="OverallIncome-Card-Header-TodayDate" style="font-size: 1.3vw;width: 100%;font-family: 'Open Sans', sans-serif;color: #dddddd;font-weight: lighter;">TodayDate<script>
        var d = new Date();
        
        document.getElementById("OverallIncome-Card-Header-TodayDate").innerHTML = d.toDateString();
</script></p>
                        </div>
                    </div>
                </div>
                <div class="card-body d-flex justify-content-center align-items-center" id="OverallIncome-Card-Body" style="margin-top: 2vw;margin-bottom: 2vw;"><span id="OverallIncome-Card-CurrencyLabel" style="font-family: 'Open Sans', sans-serif;font-size: 4vw;color: #3e3e3e;">Php&nbsp;</span><span id="OverallIncome-Card-IncomeValue" style="font-family: 'Open Sans', sans-serif;font-size: 5vw;color: #000000;">XXX,XXX.XX</span></div>
            </div>
        </div>
    </div>
    <div class="row" id="Dashboard-Top5MostSold-Row">
        <div class="col" id="Top5MostSold-Col">
            <div class="row" id="Top5MostSold-Header"><span id="Top5MostSold-Title" style="font-size: 1.5vw;padding-left: 0.5vw;color: rgb(0,0,0);font-family: 'Open Sans', sans-serif;font-weight: bold;">TOP 5 MOST SOLD PRODUCTS :</span></div>
            <div class="row" id="Top5Most-Products-Row">
                <div class="col-md-6 col-xl-4 mb-4" id="Top5Most-Product-Col-1">
                    <div class="card shadow border-left-warning py-2" id="Top5Most-Product-Card-1" style="border-left: .25rem solid #3e3e3e!important;background-color: #1bc100;">
                        <div class="card-body" id="Top5Most-Product-CardBody-1">
                            <div class="row align-items-center no-gutters" id="Top5Most-Product-CardContent-Row-1" style="width: 100%;">
                                <div class="col-xl-12 mr-2" id="Top5Most-Product-CardContent-Col-1" style="margin: 0px;margin-right: 0px;width: 100%;">
                                    <div class="text-uppercase text-warning font-weight-bold text-xs mb-1" id="Top5Most-Product-CardContent-Header-1"><span id="Top5Most-Product-CardContent-HeaderTitle-1" style="color: #ffffff;font-size: 1.3vw;font-family: 'Open Sans', sans-serif;">#1</span></div>
                                    <div class="text-dark font-weight-bold h5 mb-0" id="Top5Most-Product-CardContent-Body-1"><span id="Top5Most-Product-CardContent-ProductName-1" style="font-family: 'Open Sans', sans-serif;font-size: 1.35vw;color: #ffffff;">Top1MostSold</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-2 mb-4" id="Top5Most-Product-Col-2">
                    <div class="card shadow border-left-warning py-2" id="Top5Most-Product-Card-2" style="border-left: .25rem solid #1bc100!important;">
                        <div class="card-body" id="Top5Most-Product-CardBody-2">
                            <div class="row align-items-center no-gutters" id="Top5Most-Product-CardContent-Row-2" style="width: 100%;">
                                <div class="col-xl-12 mr-2" id="Top5Most-Product-CardContent-Col-2" style="margin: 0px;margin-right: 0px;width: 100%;">
                                    <div class="text-uppercase text-warning font-weight-bold text-xs mb-1" id="Top5Most-Product-CardContent-Header-2"><span id="Top5Most-Product-CardContent-HeaderTitle-2" style="color: #1bc100;font-size: 1.3vw;font-family: 'Open Sans', sans-serif;">#2</span></div>
                                    <div class="text-dark font-weight-bold h5 mb-0" id="Top5Most-Product-CardContent-Body-2"><span id="Top5Most-Product-CardContent-ProductName-2" style="font-family: 'Open Sans', sans-serif;font-size: 1.3vw;">Top2MostSold</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-2 mb-4" id="Top5Most-Product-Col-3">
                    <div class="card shadow border-left-warning py-2" id="Top5Most-Product-Card-3" style="border-left: .25rem solid #1bc100!important;">
                        <div class="card-body" id="Top5Most-Product-CardBody-3">
                            <div class="row align-items-center no-gutters" id="Top5Most-Product-CardContent-Row-3" style="width: 100%;">
                                <div class="col-xl-12 mr-2" id="Top5Most-Product-CardContent-Col-3" style="margin: 0px;margin-right: 0px;width: 100%;">
                                    <div class="text-uppercase text-warning font-weight-bold text-xs mb-1" id="Top5Most-Product-CardContent-Header-3"><span id="Top5Most-Product-CardContent-HeaderTitle-3" style="color: #1bc100;font-size: 1.3vw;font-family: 'Open Sans', sans-serif;">#3</span></div>
                                    <div class="text-dark font-weight-bold h5 mb-0" id="Top5Most-Product-CardContent-Body-3"><span id="Top5Most-Product-CardContent-ProductName-3" style="font-family: 'Open Sans', sans-serif;font-size: 1.3vw;">Top3MostSold</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-2 mb-4" id="Top5Most-Product-Col-4">
                    <div class="card shadow border-left-warning py-2" id="Top5Most-Product-Card-4" style="border-left: .25rem solid #1bc100!important;">
                        <div class="card-body" id="Top5Most-Product-CardBody-4">
                            <div class="row align-items-center no-gutters" id="Top5Most-Product-CardContent-Row-4" style="width: 100%;">
                                <div class="col-xl-12 mr-2" id="Top5Most-Product-CardContent-Col-4" style="margin: 0px;margin-right: 0px;width: 100%;">
                                    <div class="text-uppercase text-warning font-weight-bold text-xs mb-1" id="Top5Most-Product-CardContent-Header-4"><span id="Top5Most-Product-CardContent-HeaderTitle-4" style="color: #1bc100;font-size: 1.3vw;font-family: 'Open Sans', sans-serif;">#4</span></div>
                                    <div class="text-dark font-weight-bold h5 mb-0" id="Top5Most-Product-CardContent-Body-4"><span id="Top5Most-Product-CardContent-ProductName-4" style="font-family: 'Open Sans', sans-serif;font-size: 1.3vw;">Top4MostSold</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-2 mb-4" id="Top5Most-Product-Col-5">
                    <div class="card shadow border-left-warning py-2" id="Top5Most-Product-Card-5" style="border-left: .25rem solid #1bc100!important;">
                        <div class="card-body" id="Top5Most-Product-CardBody-5">
                            <div class="row align-items-center no-gutters" id="Top5Most-Product-CardContent-Row-5" style="width: 100%;">
                                <div class="col-xl-12 mr-2" id="Top5Most-Product-CardContent-Col-5" style="margin: 0px;margin-right: 0px;width: 100%;">
                                    <div class="text-uppercase text-warning font-weight-bold text-xs mb-1" id="Top5Most-Product-CardContent-Header-5"><span id="Top5Most-Product-CardContent-HeaderTitle-5" style="color: #1bc100;font-size: 1.3vw;font-family: 'Open Sans', sans-serif;">#5</span></div>
                                    <div class="text-dark font-weight-bold h5 mb-0" id="Top5Most-Product-CardContent-Body-5"><span id="Top5Most-Product-CardContent-ProductName-5" style="font-family: 'Open Sans', sans-serif;font-size: 1.3vw;">Top5MostSold</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row" id="Dashboard-Top5LeastSold-Row">
        <div class="col" id="Top5LeastSold-Col">
            <div class="row" id="Top5LeastSold-Header"><span id="Top5LeastSold-Title" style="font-size: 1.5vw;padding-left: 0.5vw;color: rgb(0,0,0);font-family: 'Open Sans', sans-serif;font-weight: bold;">TOP 5 LEAST SOLD PRODUCTS :</span></div>
            <div class="row" id="Top5Least-Products-Row">
                <div class="col-md-6 col-xl-4 offset-xl-0 mb-4" id="Top5Least-Product-Col-1">
                    <div class="card shadow border-left-warning py-2" id="Top5Least-Product-Card-1" style="border-left: .25rem solid #3e3e3e!important;background-color: #e74a3b;">
                        <div class="card-body" id="Top5Least-Product-CardBody-1">
                            <div class="row align-items-center no-gutters" id="Top5Least-Product-CardContent-Row-1" style="width: 100%;">
                                <div class="col-xl-12 mr-2" id="Top5Least-Product-CardContent-Col-1" style="margin: 0px;margin-right: 0px;width: 100%;">
                                    <div class="text-uppercase text-warning font-weight-bold text-xs mb-1" id="Top5Least-Product-CardContent-Header-1"><span id="Top5Least-Product-CardContent-HeaderTitle-1" style="color: #ffffff;font-size: 1.3vw;font-family: 'Open Sans', sans-serif;">#1</span></div>
                                    <div class="text-dark font-weight-bold h5 mb-0" id="Top5Least-Product-CardContent-Body-1"><span id="Top5Least-Product-CardContent-ProductName-1" style="font-family: 'Open Sans', sans-serif;font-size: 1.35vw;color: #ffffff;">Top1LeastSold</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-2 mb-4" id="Top5Least-Product-Col-2">
                    <div class="card shadow border-left-warning py-2" id="Top5Least-Product-Card-2" style="border-left: .25rem solid #e74a3b!important;background-color: #ffffff;">
                        <div class="card-body" id="Top5Least-Product-CardBody-2">
                            <div class="row align-items-center no-gutters" id="Top5Least-Product-CardContent-Row-2" style="width: 100%;">
                                <div class="col-xl-12 mr-2" id="Top5Least-Product-CardContent-Col-2" style="margin: 0px;margin-right: 0px;width: 100%;">
                                    <div class="text-uppercase text-warning font-weight-bold text-xs mb-1" id="Top5Least-Product-CardContent-Header-2"><span id="Top5Least-Product-CardContent-HeaderTitle-2" style="color: #e74a3b;font-size: 1.3vw;font-family: 'Open Sans', sans-serif;">#2</span></div>
                                    <div class="text-dark font-weight-bold h5 mb-0" id="Top5Least-Product-CardContent-Body-2"><span id="Top5Least-Product-CardContent-ProductName-2" style="font-family: 'Open Sans', sans-serif;font-size: 1.35vw;color: #5a5c69;"><strong>Top2LeastSold</strong><br></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-2 mb-4" id="Top5Least-Product-Col-3">
                    <div class="card shadow border-left-warning py-2" id="Top5Least-Product-Card-3" style="border-left: .25rem solid #e74a3b!important;background-color: #ffffff;">
                        <div class="card-body" id="Top5Least-Product-CardBody-3">
                            <div class="row align-items-center no-gutters" id="Top5Least-Product-CardContent-Row-3" style="width: 100%;">
                                <div class="col-xl-12 mr-2" id="Top5Least-Product-CardContent-Col-3" style="margin: 0px;margin-right: 0px;width: 100%;">
                                    <div class="text-uppercase text-warning font-weight-bold text-xs mb-1" id="Top5Least-Product-CardContent-Header-3"><span id="Top5Least-Product-CardContent-HeaderTitle-3" style="color: #e74a3b;font-size: 1.3vw;font-family: 'Open Sans', sans-serif;">#3</span></div>
                                    <div class="text-dark font-weight-bold h5 mb-0" id="Top5Least-Product-CardContent-Body-3"><span id="Top5Least-Product-CardContent-ProductName-3" style="font-family: 'Open Sans', sans-serif;font-size: 1.35vw;color: #5a5c69;">Top3LeastSold</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-2 mb-4" id="Top5Least-Product-Col-4">
                    <div class="card shadow border-left-warning py-2" id="Top5Least-Product-Card-4" style="border-left: .25rem solid #e74a3b!important;background-color: #ffffff;">
                        <div class="card-body" id="Top5Least-Product-CardBody-4">
                            <div class="row align-items-center no-gutters" id="Top5Least-Product-CardContent-Row-4" style="width: 100%;">
                                <div class="col-xl-12 mr-2" id="Top5Least-Product-CardContent-Col-4" style="margin: 0px;margin-right: 0px;width: 100%;">
                                    <div class="text-uppercase text-warning font-weight-bold text-xs mb-1" id="Top5Least-Product-CardContent-Header-4"><span id="Top5Least-Product-CardContent-HeaderTitle-4" style="color: #e74a3b;font-size: 1.3vw;font-family: 'Open Sans', sans-serif;">#4</span></div>
                                    <div class="text-dark font-weight-bold h5 mb-0" id="Top5Least-Product-CardContent-Body-4"><span id="Top5Least-Product-CardContent-ProductName-4" style="font-family: 'Open Sans', sans-serif;font-size: 1.35vw;color: #5a5c69;">Top4LeastSold</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-2 mb-4" id="Top5Least-Product-Col-5">
                    <div class="card shadow border-left-warning py-2" id="Top5Least-Product-Card-5" style="border-left: .25rem solid #e74a3b!important;background-color: #ffffff;">
                        <div class="card-body" id="Top5Least-Product-CardBody-5">
                            <div class="row align-items-center no-gutters" id="Top5Least-Product-CardContent-Row-5" style="width: 100%;">
                                <div class="col-xl-12 mr-2" id="Top5Least-Product-CardContent-Col-5" style="margin: 0px;margin-right: 0px;width: 100%;">
                                    <div class="text-uppercase text-warning font-weight-bold text-xs mb-1" id="Top5Least-Product-CardContent-Header-5"><span id="Top5Least-Product-CardContent-HeaderTitle-5" style="color: #e74a3b;font-size: 1.3vw;font-family: 'Open Sans', sans-serif;">#5</span></div>
                                    <div class="text-dark font-weight-bold h5 mb-0" id="Top5Least-Product-CardContent-Body-5"><span id="Top5Least-Product-CardContent-ProductName-5" style="font-family: 'Open Sans', sans-serif;font-size: 1.35vw;color: #5a5c69;">Top5LeastSold</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row" id="Dashboard-LowInv-Row">
        <div class="col-lg-6 col-xl-10 offset-xl-1 mb-4" id="LowInv-Col">
            <div class="card shadow mb-4" id="LowInv-Card">
                <div class="card-header d-flex justify-content-between align-items-center" id="LowInv-Card-Header" style="background-color: #e76f3b;padding-top: 1.3vw;padding-bottom: 1.3vw;padding-right: 1vw;padding-left: 2vw;">
                    <h6 class="text-center font-weight-bold m-0" id="LowInv-Card-HeaderTitle" style="color: #ffffff;font-size: 3vw;font-family: 'Open Sans', sans-serif;width: 100%;">LOW INVENTORY STOCK</h6>
                    <div class="dropdown no-arrow" id="LowInv-Actions"><button class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false" id="LowInv-Actions-Button" type="button"><i class="fas fa-ellipsis-v text-gray-400" id="LowInv-Actions-ButtonIcon"></i></button>
                        <div class="dropdown-menu shadow dropdown-menu-right animated--fade-in"
                            role="menu" id="LowInv-Actions-Menu">
                            <p class="text-center dropdown-header" id="LowInv-Actions-MenuHeader">Action Items :</p><a class="dropdown-item" role="presentation" id="LowInv-Actions-MenuItem-1" href="#">&nbsp;Print</a></div>
                    </div>
                </div>
                <div class="card-body" id="LowInv-Card-Body">
                    <h4 id="LowInv-Card-ProductHeader-1" class="small font-weight-bold" style="font-size: 1.5vw;font-family: 'Open Sans', sans-serif;">LowProduct1<span class="float-right" id="LowInv-Card-ProductHeader-Percentage-1">3%</span></h4>
                    <div class="progress mb-4" id="LowInv-Card-ProductProgress-1" style="height: 2vh;">
                        <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" aria-valuenow="3" aria-valuemin="0" aria-valuemax="100" id="LowInv-Card-ProductProgress-Bar" style="width: 3%;">3%</div>
                    </div>
                    <h4 id="LowInv-Card-ProductHeader-2" class="small font-weight-bold" style="font-size: 1.5vw;font-family: 'Open Sans', sans-serif;">LowProduct2<span class="float-right" id="LowInv-Card-ProductHeader-Percentage-2">5%</span></h4>
                    <div class="progress mb-4" id="LowInv-Card-ProductProgress-2" style="height: 2vh;">
                        <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100" id="LowInv-Card-ProductProgress-Bar" style="width: 5%;">5%</div>
                    </div>
                    <h4 id="LowInv-Card-ProductHeader-3" class="small font-weight-bold" style="font-size: 1.5vw;font-family: 'Open Sans', sans-serif;">LowProduct3<span class="float-right" id="LowInv-Card-ProductHeader-Percentage-3">7%</span></h4>
                    <div class="progress mb-4" id="LowInv-Card-ProductProgress-3" style="height: 2vh;">
                        <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" aria-valuenow="7" aria-valuemin="0" aria-valuemax="100" id="LowInv-Card-ProductProgress-Bar" style="width: 7%;">7%</div>
                    </div>
                    <h4 id="LowInv-Card-ProductHeader-4" class="small font-weight-bold" style="font-size: 1.5vw;font-family: 'Open Sans', sans-serif;">LowProduct4<span class="float-right" id="LowInv-Card-ProductHeader-Percentage-4">10%</span></h4>
                    <div class="progress mb-4" id="LowInv-Card-ProductProgress-4" style="height: 2vh;">
                        <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" id="LowInv-Card-ProductProgress-Bar" style="width: 10%;">10%</div>
                    </div>
                    <h4 id="LowInv-Card-ProductHeader-5" class="small font-weight-bold" style="font-size: 1.5vw;font-family: 'Open Sans', sans-serif;">LowProduct5<span class="float-right" id="LowInv-Card-ProductHeader-Percentage-5">18%</span></h4>
                    <div class="progress mb-4" id="LowInv-Card-ProductProgress-5" style="height: 2vh;">
                        <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100" id="LowInv-Card-ProductProgress-Bar" style="width: 18%;">18%</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div></div>
    </div>
    </div>
    <footer class="bg-white sticky-footer" id="Footer" style="background: linear-gradient(to bottom, rgba(255, 255, 255, 0.5), rgba(148, 148, 148, 0.5));">
        <div class="container my-auto">
            <div class="text-center my-auto copyright"><span>LazeRosa Systems || by Group 3</span></div>
        </div>
        <div class="container my-auto">
            <div class="text-center my-auto copyright"><img src="assets/img/SYSTIMP/LazeBeauty%20Circle.png" style="width: 4vw;margin-top: 1vw;"></div>
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