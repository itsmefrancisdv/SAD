<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>LazeRosa - Pricelist</title>
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
            <h3 class="text-dark mb-0" id="Page-Header-Title" style="color: rgb(0,0,0);font-family: ABeeZee, sans-serif;font-weight: bold;font-size: 35px;letter-spacing: normal;">INVENTORY: Pricelist</h3>
        </div>
        <hr>
        <div class="card shadow" id="Pricelist_Table" style="margin-right: 8vw;margin-left: 8vw;">
            <div class="card-header py-3" id="Table-Header" style="background-color: rgb(101,118,122);/*background: linear-gradient(to right, #2657eb, #de6161);*/">
                <p class="text-center m-0 font-weight-bold" id="Table-HeaderTitle" style="font-size: 30px;font-weight: bold;font-family: 'Open Sans', sans-serif;color: #ffffff;">Inventory Pricelist</p>
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
                    </div><!-- this is show -->
                    <div class="col-md-6" id="Table-Tool2">
                        <div class="text-md-right dataTables_filter" id="Table-Tool2-Frame"><label id="Table-Search" style="width: 350px;padding-right: 0px;margin-right: 12px;"><input type="search" id="Table-SearchBar" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label>
                            <button
                                class="btn" id="Table-SearchButton" type="submit" style="background-color: rgba(78,115,223,0);border-color: transparent;width: auto;padding-bottom: 0px;padding-top: 0px;padding-right: 0px;padding-left: 0px;"><img id="Search-ButtonIMG" src="assets/img/SYSTIMP/Search%20(Icon).png" style="width: 20px;"></button>
                        </div>
                    </div> <!-- this is search -->
                </div>
                <form method="POST" action="">
                <div class="table-responsive table mt-2" id="ViewInv-TableFrame" role="grid" aria-describedby="dataTable_info">
                    <table class="table my-0" id="ViewInv-Table">
                        <thead id="Table-Header">
                        <tr id="Table-HeaderRow" style="background-color: #3e3e3e;font-family: Nunito, sans-serif;color: rgb(255,255,255);/*background: linear-gradient(to right, #2657eb, #de6161);*/">
                                <th class="text-center" style="width: 40px;"><input type="checkbox" id="Checkbox-Header" disabled=""></th>
                                <th>Product ID</th>
                                <th>Product Name</th>
                                <th class="text-left" style="width: 200px;">SRP</th>
                                <th class="text-left" style="width: 150px;">Buying Price</th>
                                <th class="text-left" style="width: 150px;">Discount rate</th>
                                <th class="text-left" style="width: 215px;">Discount Price</th>
                                <th class="text-left" style="width: 215px;">Shopee Rate</th>
                                <th class="text-left" style="width: 215px;">Shopee Price</th>
                                <th class="text-left" style="width: 215px;">Amount</th>
                            </tr>
                        </thead>
                        <tbody id="Table-Body">
                        <?php
                            require("connect.php");
                            $page = $_GET["page"];
                            if($page=="" || $page == "1"){
                                $page1 = 0;
                            }
                            else{
                                $page1 = ($page*20)-20;
                            }
                            $discountprice;
                            $shopeeprice;
                            $amount;
                            $query = mysqli_query($DBConnect, "SELECT * FROM tblinventory ORDER BY pID limit $page1, 20");
                            echo mysqli_error($DBConnect);
                            while($retrieve = mysqli_fetch_array($query)){
                                echo "<tr>";
                                echo "<td><input type='checkbox' name='checkboxid[]' value=$retrieve[pID]></td>";
                                echo "<td class='id'>".$retrieve["pID"]. "</td>";
                                echo "<td class='name'>".$retrieve["pName"]. "</td>";
                                echo "<td class='srp'>".$retrieve["pSRP"]. "</td>";
                                echo "<td class='buyprice'>".$retrieve["pBuyingPrice"]. "</td>";
                                echo "<td class='discrate'>".$retrieve["pDiscountRate"]. "</td>";
                                $discountprice = $retrieve["pBuyingPrice"] *(1 - ($retrieve["pDiscountRate"] / 100));
                                echo "<td>".$discountprice. "</td>";

                                echo "<td class='shopeerate'>".$retrieve["pShopeeRate"]. "</td>";
                                $shopeeprice = $retrieve["pBuyingPrice"] *(1-($retrieve["pShopeeRate"] / 100));
                                echo "<td>".$shopeeprice. "</td>";

                                $amount = $discountprice * (1-($retrieve["pShopeeRate"] / 100));
                                echo "<td>".$amount. "</td>";
                                // echo "<td class='quantity'>".$retrieve["pQuantity"]. "</td>";
                                // echo "<td class='reorder'>".$retrieve["pReorderPoint"]. "</td>";
                                // if($retrieve["pQuantity"] > $retrieve["pReorderPoint"]){
                                //     // $availability = $retrieve["pAvailability"];
                                //     $availability = "high";
                                //     echo "<td>".$availability."</td>";
                                // }
                                // else if($retrieve["pQuantity"] <= $retrieve["pReorderPoint"]){
                                //     // $availability = $retrieve["pAvailability"];
                                //     $availability = "low";
                                //     echo "<td>".$availability."</td>";
                                // }

                                echo "</tr>";
                                
							}
							/*
                            $query2 = mysqli_query($DBConnect, "SELECT * FROM tblinventory ORDER BY pID");
                            $count = mysqli_num_rows($query2);
                            $a = $count / 20;
                            $a = ceil($a);

                            
                            for($b=1; $b <= $a; $b++){
                                ?>
                                <a a class="page-link" id="Table-PageNav-Link" href = "viewinventory.php?page=<?php echo $b; ?>" style="text-decoration:none"><?php echo $b.""; ?></a>
                                <?php
							}
							*/

                        ?>

						<!--
                            <tr id="Table-Row">
                                <td id="Checkbox-Entry"><input type="checkbox" id="Checkbox-EntryItem"></td>
                                <td id="ProductID-Entry">Product ID</td>
                                <td id="ProductName-Entry"><img class="rounded-circle mr-2" id="Product-Icon" width="30" height="30" src="assets/img/avatars/avatar1.jpeg">ProductName</td>
                                <td id="Brand-Entry">ProductBrand</td>
                                <td id="QTY-Entry">ProductQTY</td>
                                <td id="RP-Entry">ProductRP</td>
                                <td class="table-success" id="Avail-Entry">AvailHigh<button class="btn btn-primary btn-sm border-dark shadow float-right" id="Reorder-Button" type="button" style="background-color: #ff7a00;color: rgb(0,0,0);font-family: 'Open Sans', sans-serif;font-weight: bold;font-size: 12px;border-radius: 50px 10px;padding-right: 15px;padding-left: 16px;border-width: 2px;/*border-color: rgb(0,0,0);*/">REORDER</button></td>
                            </tr>
                        -->

                        </tbody>
                        <tfoot id="Table-Footer" style="background-color: #dcdcdc;">
                        <tr id="Table-FooterRow" style="color: rgb(0,0,0);/*background: linear-gradient(to right, rgba(38,87,235,0.49), rgba(222,97,97,0.5));*/background-color: #969696;">
                                <td><input type="checkbox" id="Checkbox-Footer" disabled=""></td>
                                <td><strong>Product ID</strong></td>
                                <td><strong>Product Name</strong></td>
                                <td><strong>SRP</strong></td>
                                <td><strong>Buying Price</strong></td>
                                <td><strong>Discount rate</strong></td>
                                <td><strong>Discount Price</strong></td>
                                <td><strong>Shopee Rate</strong></td>
                                <td><strong>Shopee Price</strong></td>
                                <td><strong>Amount</strong></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- </form> -->
                <div class="row" id="Table-Details">
                    <div class="col-md-6 align-self-center" id="Table-PageInd" style="width: 316px;"><span id="Table-PageInd-Range">Showing&nbsp;<span id="Table-PageInd-CurrentFirst">1</span><span>&nbsp;to&nbsp;</span><span id="Table-PageInd-CurrentLast">10</span><span>&nbsp;of&nbsp;</span><span id="Table-PageInd-MaxNum">27</span></span>
                    </div>
                    <div class="col-md-6" id="Table-PageNav-Frame">
                        <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers" id="Table-PageNavBar">
                            <ul class="pagination" id="Table-PageNav">

								<!-- Previous Button

                                <li class="</?php if($page <= 1){ echo ' page-item disabled'; } ?>" id="Table-PageNav-Prev">
                                	<a class="page-link" href="</?php if($page <= 1){ echo '#'; } else { echo "?pageno=".($page - 1); } ?>" aria-label="Previous" id="Table-PageNav-Prev-Link"><span aria-hidden="true">«</span></a>
								</li>

								-->

								<?php

								$page = $_GET["page"];

								$query2 = mysqli_query($DBConnect, "SELECT * FROM tblinventory ORDER BY pID");
								$count = mysqli_num_rows($query2);
								$a = $count / 20;
								$a = ceil($a);


								for($b=1; $b <= $a; $b++){
									?>
									<li class="page-item <?php if($b == $page){ echo ' active'; } ?>" id="Table-PageNav">
										<a class="page-link" id="Table-PageNav-Link" href="pricelist.php?page=<?php echo $b; ?>"><?php echo $b.""; ?></a>
									</li>
									<?php
								}

								?>

                                <!-- 
									<li class="page-item" id="Table-PageNav-P2"><a class="page-link" href="#" id="Table-PageNav-P2-Link">2</a></li>
                                	<li class="page-item" id="Table-PageNav-P3"><a class="page-link" href="#" id="Table-PageNav-P3-Link">3</a></li>
								-->

								<!-- Next Button

                                <li class="</?php if($pageno >= $a){ echo ' page-item disabled'; } ?>" id="Table-PageNav-Next">
									<a class="page-link" href="</?php if($pageno >= $a){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>" aria-label="Next" id="Table-PageNav-Next-Link"><span aria-hidden="true">»</span></a>
								</li>

								-->

                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="row" id="Table-Button-Row">
                    <div class="col-md-6" id="SelectReorder-Column" style="width: 100%;"><button class="btn btn-primary btn-sm border-dark shadow float-left" id="SelectReorder-Button" type="button" style="background-color: #ff7a00;color: rgb(0,0,0);font-family: 'Open Sans', sans-serif;font-weight: bold;font-size: 16px;border-radius: 50px 10px;padding-right: 15px;padding-left: 16px;border-width: 2px;/*border-color: rgb(0,0,0);*/">REORDER SELECTED ITEMS</button></div>
                    <div
                        class="col" id="DeleteInv-Column">
                        <div id="ViewInv_Delete"><a class="btn btn-danger float-right" name="deletedisplay" type="submit" role="button" id="DeleteButton" data-toggle="modal" href="#DeletePopup" style="font-family: 'Open Sans', sans-serif;font-weight: normal;border-radius: 50px 10px;padding-right: 25px;padding-left: 25px;border-width: 2px;">DELETE</a>
                            <div
                                class="modal fade" role="dialog" tabindex="-1" id="DeletePopup">
                                <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document" id="DeleteInv-Modal">
                                    <div class="modal-content" id="DeleteInv-Modal-Content">
                                        <div class="modal-header" id="DeleteInv-Modal-Header" style="background-color: #e74a3b;color: rgb(255,255,255);font-family: 'Open Sans', sans-serif;">
                                            <h4 id="DeleteInv-Title" style="font-size: 30px;font-weight: normal;margin-top: 8px;">Delete Selected Inventory Items?</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close" id="DeleteInv-CloseButton"><span aria-hidden="true">×</span></button></div>
                                        <div class="modal-body"
                                            id="DeleteInv-ModalBody">
                                            <div class="table-responsive table mt-2" id="ViewInv-DeleteTableFrame" role="grid" aria-describedby="dataTable_info" style="width: auto;">
                                                <table class="table my-0" id="ViewInv-DeleteTable">
                                                    <thead id="DeleteTable-Header">
                                                        <tr id="DeleteTable-HeaderRow" style="background-color: #FF7A00;font-family: Nunito, sans-serif;color: rgb(0,0,0);">
                                                            <th>Product Name</th>
                                                            <th class="text-left" style="width: 200px;">Brand</th>
                                                            <th class="text-left" style="width: 150px;">QTY On Hand</th>
                                                            <th class="text-left" style="width: 150px;">Reorder Point</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="DeleteTable-Body">
                                                        <tr id="DeleteTable-Row">
                                                            <td id="ProductName-DeleteEntry">Product Name</td>
                                                            <td id="Brand-DeleteEntry">Product Brand</td>
                                                            <td id="QTY-DeleteEntry">Quantity</td>
                                                            <td id="RP-DeleteEntry">Reorder Point</td>
                                                        </tr>
                                                        <?php
                                                            require("connect.php");
                                                            if(isset($_POST["delete"])){
                                                                $all = $_POST["checkboxid"];
                                                                $extract = implode(',', $all);
                                                                echo $extract;
                                                                $query = "DELETE FROM tblinventory WHERE pID IN($extract)";
                                                                $query2 = mysqli_query($DBConnect, $query);

                                                                if($query2){
                                                                    echo "<script type='text/javascript'> document.location = 'viewinventory.php'; </script>";
                                                                }
                                                            }
                                                        ?>
                                                    </tbody>
                                                    <tfoot id="DeleteTable-Footer" style="background-color: #dcdcdc;">
                                                        <tr id="DeleteTable-FooterRow">
                                                            <td><strong>Product Name</strong></td>
                                                            <td><strong>Brand</strong></td>
                                                            <td><strong>QTY on Hand</strong></td>
                                                            <td><strong>Reorder Point</strong></td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="modal-footer" id="DeleteInv-ModalFooter"><button class="btn btn-light text-danger" id="DeleteInv-CancelButton" data-dismiss="modal" type="button" style="font-family: 'Open Sans', sans-serif;">Cancel</button><button class="btn btn-danger" id="DeleteInv-ConfirmButton"
                                                name="delete" type="submit" style="border-radius: 50px 10px;padding-right: 25px;padding-left: 25px;font-family: 'Open Sans', sans-serif;">CONFIRM DELETION</button></div>
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
                                    <h4 id="EditInv-Title" style="font-size: 30px;font-weight: normal;margin-top: 8px;">Edit Inventory</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close" id="EditInv-CloseButton"><span aria-hidden="true">×</span></button></div>
                                <div class="modal-body" id="EditInv-ModalBody">
                                    <div class="table-responsive table mt-2" id="ViewInv-EditTableFrame" role="grid" aria-describedby="dataTable_info" style="width: auto;">
                                        <table class="table my-0" id="ViewInv-EditTable">
                                            <thead id="EditTable-Header">
                                                <tr id="EditTable-HeaderRow" style="background-color: #FF7A00;font-family: Nunito, sans-serif;color: rgb(0,0,0);">
                                                    <th>Product ID</th>
                                                    <th>Product Name</th>
                                                    <th class="text-left" style="width: 200px;">SRP</th>
                                                    <th class="text-left" style="width: 150px;">Buying Price</th>
                                                    <th class="text-left" style="width: 150px;">Discount Rate</th>
                                                    <th class="text-left" style="width: 150px;">Shopee Rate</th>
                                                </tr>
                                            </thead>
                                            <tbody id="EditTable-Body">
                                                <?php
                                                    require("connect.php");
                                                    if(isset($_POST["edit"])){
                                                        $all = $_POST["checkboxid"];
                                                        $extract = implode($all);
                                                        $pID = $_POST["pidedit"];
                                                        $pName = $_POST["pnameedit"];
                                                        $pSRP = $_POST["psrpedit"];
                                                        $pBPrice = $_POST["pbpriceedit"];
                                                        $pDiscountR = $_POST["pdiscountedit"];
                                                        $pShopeeR = $_POST["pshopeeedit"];
                                                        // echo $extract;
                                                        $query = "UPDATE tblinventory SET pID='$pID', pName='$pName', pSRP='$pSRP',
                                                        pBuyingPrice='$pBPrice', pDiscountRate='$pDiscountR', pShopeeRate='$pShopeeR' WHERE pID='$pID'";
                                                        $query2 = mysqli_query($DBConnect, $query);

                                                        if($query2){
                                                            echo "<script type='text/javascript'> document.location = 'pricelist.php'; </script>";
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
        <div class="col" id="AddInv-Column">
            <div id="ViewInv_Add"><a class="btn btn-success float-right" role="button" id="AddButton" data-toggle="modal" href="#AddPopup" style="font-family: 'Open Sans', sans-serif;font-weight: normal;border-radius: 50px 10px;padding-right: 25px;padding-left: 25px;border-width: 2px;">ADD</a>
                <div
                    class="modal fade" role="dialog" tabindex="-1" id="AddPopup">
                    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document" id="AddInv-Modal">
                        <div class="modal-content" id="AddInv-ModalContent">
                            <div class="modal-header" id="AddInv-ModalHeader" style="background-color: rgb(28,200,138);color: rgb(255,255,255);font-family: 'Open Sans', sans-serif;">
                                <h4 id="AddInv-Title" style="font-size: 30px;font-weight: normal;margin-top: 8px;">Add to Inventory</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close" id="AddInv-CloseButton"><span aria-hidden="true">×</span></button></div>
                            <div class="modal-body" id="AddInv-ModalBody">
                                <div class="table-responsive table mt-2" id="ViewInv-AddTableFrame" role="grid" aria-describedby="dataTable_info" style="width: auto;">
                                    <table class="table my-0" id="ViewInv-AddTable">
                                        <thead id="AddTable-Header">
                                            <tr id="AddTable-HeaderRow" style="background-color: #FF7A00;font-family: Nunito, sans-serif;color: rgb(0,0,0);">
                                                <th>Product ID</th>
                                                <th>Product Name</th>
                                                <th class="text-left" style="width: 200px;">Brand</th>
                                                <th class="text-left" style="width: 150px;">QTY On Hand</th>
                                                <th class="text-left" style="width: 150px;">Reorder Point</th>
                                            </tr>
                                        </thead>
                                        <tbody id="AddTable-Body">
                                        <tr id="AddTable-Row">
                                            <form  method="post">
                                                <td id="ProductID-InputEntry"><input class="bg-white border rounded border-white" type="text" id="ProductName-Input" placeholder="Product ID" name="pid" style="width: 100%;height: 100%;padding-bottom: 0px;padding-top: 0px;"
                                                        autocomplete="on" readonly></td>
                                                <td id="ProductName-InputEntry"><input class="bg-white border rounded border-white" type="text" id="ProductName-Input" placeholder="Product Name" name="pname" style="width: 100%;height: 100%;padding-bottom: 0px;padding-top: 0px;"
                                                        autocomplete="on"></td>
                                                <td id="Brand-InputEntry"><input class="bg-white border rounded border-white" type="text" id="ProductBrand-Input" placeholder="Product Brand" name="pbrand" style="width: 100%;height: 100%;padding-bottom: 0px;padding-top: 0px;"
                                                        autocomplete="on"></td>
                                                <td id="QTY-InputEntry"><input class="border rounded-0 border-white" type="number" id="QTY-Input" name="pqty" placeholder="Quantity" style="width: 100%;"></td>
                                                <td id="RP-InputEntry"><input class="border rounded-0 border-white" type="number" id="RP-Input" name="prp" placeholder="Reorder Point" style="width: 100%;"></td>
                                            </tr>
                                            <?php
                                                require("connect.php");
                                                if(isset ($_POST["confirm"])){
                                                    $pid = $_POST["pid"];
                                                    $pname = $_POST["pname"];
                                                    $pbrand = $_POST["pbrand"];
                                                    $pqty = $_POST["pqty"];
                                                    $preorder = $_POST["prp"];
                                                    $add = "INSERT INTO tblinventory (pID, pName, pQuantity, pReorderPoint) 
                                                        VALUES ('$pid', '$pname', '$pqty', '$preorder')";
                                                    mysqli_query($DBConnect, $add) or die (mysqli_error($DBConnect));
                                                    echo "<script type='text/javascript'> document.location = 'viewinventory.php'; </script>";

                                                }
                                            ?>
                                        </tbody>
                                        <tfoot id="AddTable-Footer" style="background-color: #dcdcdc;">
                                            <tr id="AddTable-FooterRow">
                                                <td><strong>Product ID</strong></td>
                                                <td><strong>Product Name</strong></td>
                                                <td><strong>Brand</strong></td>
                                                <td><strong>QTY on Hand</strong></td>
                                                <td><strong>Reorder Point</strong></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                            <div class="modal-footer" id="AddInv-ModalFooter"><button class="btn btn-light text-danger" id="AddInv-CancelButton" data-dismiss="modal" type="button" style="font-family: 'Open Sans', sans-serif;">Cancel</button><button class="btn btn-success" id="AddInv-ConfirmButton" type="submit"
                                    name = "confirm" style="font-family: 'Open Sans', sans-serif;padding-right: 25px;padding-left: 25px;border-radius: 50px 10px;">CONFIRM</button></div>
                        </div>
                    </div>
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
    <script src="assets/js/custom2.js"></script>
</body>

</html>