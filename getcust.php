<?php
 require_once('connect.php');

$q = intval($_GET['q']);

$sql="SELECT * FROM customers WHERE custID = $q";
$result = mysqli_query($DBConnect,$sql);

$sql2 = "SELECT * FROM customers WHERE custID = $q";
$result3 = mysqli_query($DBConnect,$sql2);

// if (isset($_POST['submit'])) {
//   $squery = "SELECT * FROM customers WHERE custID='{$q}'";
//   $sresult = mysqli_query($DBConnectonnect, $squery);
//   $supp = mysqli_fetch_array($sresult, MYSQLI_ASSOC);

  // $custPO = $_POST["CustPONum"];
  // $custID = $q;
  // $custMOP = $_POST["custMOP"];
  // $custdateOrder = $_POST["CustDateOrd"];
  // $custdatePickup = $_POST["CustDatePick"];
  // $custPlatform = $_POST["custPlatform"];
  // $custCourier = $_POST["custCourier"];
  // $add = "INSERT INTO customer_orders (custPO, custID, custMOP, custDateOrdered, custDatePickup, custPlatform ,custCourier, custStatus) 
  //     VALUES ('$custPO', '$custID', '$custMOP', '$custdateOrder', '$custdatePickup', '$custPlatform', '$custCourier', 'Pending')";
  // mysqli_query($DBConnectonnect, $add) or die (mysqli_error($DBConnectonnect));
  // echo "<script type='text/javascript'> document.location = 'customerpo.php'; </script>";

  // $query2 = "INSERT INTO customer_orders (custPO, custID, custName, custMOP, custDateOrdered, custDatePickup, custPlatform ,custCourier, custStatus, custTotal) 
  // VALUES ('{$q}', '$custID', '{$_POST['CustName']}', '{$_POST['CustMOP']}', '{$_POST['CustDateOrd']}', '{$_POST['CustDatePick']}', '{$_POST['CustPlatform']}', '{$_POST['CustCourier']}', 'Pending', '{$_POST['CustName']}')";
  // mysqli_query($DBConnect, $query2);
  // $poid = mysqli_insert_id($DBConnect);

  // $query2 = "INSERT INTO purchase_orders (supplierID,dateOrdered,paymentMethod,status) VALUES
  // ('{$q}',NOW(),'{$_POST['CustMOP']}','Pending')";
  // mysqli_query($DBConnectonnect, $query2);
  // $poid = mysqli_insert_id($DBConnectonnect);

  // for ($i = 0; $i < sizeof($_POST['products']); $i++) {
  //   $amount = $_POST['qty'][$i] * $_POST['unitp'][$i];
  //   $query3 = "INSERT INTO purchase_order_items (purchaseID,itemID,quantity,unitPrice,amount) VALUES
  //   ('{$poid}','{$_POST['products'][$i]}','{$_POST['qty'][$i]}','{$_POST['unitp'][$i]}','{$amount}')";
  //   mysqli_query($DBConnectonnect, $query3);
  // }


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>LazeRosa - Customer Purchase Order</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
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
  <form method="POST">
    <?php $q = intval($_GET['q']);
      while ($supp = mysqli_fetch_array($result3,MYSQLI_ASSOC)){  
      $query = mysqli_query($DBConnect, "SELECT * FROM customer_orders");
      while($row = mysqli_fetch_array($query)){
          $id=$row["custPO"] + 1;
      }
      echo "<div class='card-body' id='Table-Body' style='padding-bottom: 0px;padding-top: 10px;'>";
      echo "<div class='row' id='Table-PODetails'>";
      echo "<div class='col-auto col-md-6 col-xl-4 text-nowrap' id='Table-PODetailCol1' style='padding-top: 12px;padding-bottom: 12px;width: 370px;'>";
      echo "<div id='Table-PODetail1' class='dataTables_length' aria-controls='dataTable' style='padding-top: 10px;padding-bottom: 10px;width: 100%;max-width: 360px;'><label id='Table-PONumLabel' style='margin-top: 0px;margin-bottom: 0px;width: 100%;'>Customer PO #:&nbsp;<input class='border rounded border-dark float-right' id='Table-PONumInput' style='border-radius: 20px;margin-left: 0px;width: 185px;' name='CustPONum' type='text' value='".$id."' size='30' disabled><br/></label></div>";

    ?>
        <div id="Table-PODetail2" class="dataTables_length" aria-controls="dataTable" style="padding-top: 10px;padding-bottom: 10px;width: 100%;max-width: 360px;"><label id="Table-NameLabel" style="margin-top: 0px;margin-bottom: 0px;width: 100%;">Customer Name:&nbsp; <input class="border rounded border-dark float-right" type="text" id="Table-NameInput" style="border-radius: 20px;margin-left: 0px;width: 185px;" name="CustName" value="<?php echo $supp['custName']; ?>" disabled></label></div>
        <div id="Table-PODetail3" class="dataTables_length" aria-controls="dataTable" style="padding-top: 10px;padding-bottom: 10px;width: 100%;max-width: 360px;"><label id="Table-EmailLabel" style="margin-top: 0px;margin-bottom: 0px;width: 100%;">Customer Email:&nbsp; <input class="border rounded border-dark float-right" type="email" id="Table-EmailInput" style="width: 185px;border-radius: 20px;margin-left: 0px;" autocomplete="on" name="CustEmail" value="<?php echo $supp['custEmail']; ?>" disabled></label></div> 
      </div>

      <div class="col-auto col-md-6 col-xl-4 text-nowrap" id="Table-PODetailCol2" style="padding-top: 12px;padding-bottom: 12px;">    
        <div id="Table-PODetail4" class="dataTables_length" aria-controls="dataTable" style="padding-top: 10px;padding-bottom: 10px;width: 100%;max-width: 360px;"><label id="Table-NumLabel" style="margin-top: 0px;margin-bottom: 0px;width: 100%;">Customer Number:&nbsp; <input class="border rounded border-dark float-right" type="tel" id="Table-NumInput" style="border-radius: 20px;width: 175px;" autocomplete="on" name="CustNumb" value="<?php echo $supp['custNumber']; ?>" disabled></label></div>  
        <div id="Table-PODetail5" class="dataTables_length" aria-controls="dataTable" style="padding-top: 10px;padding-bottom: 10px;width: 100%;max-width: 360px;"><label id="Table-AddrLabel" style="margin-top: 0px;margin-bottom: 0px;width: 100%;">Customer Address:&nbsp; <input class="border rounded border-dark float-right" type="text" id="Table-AddrInput" style="border-radius: 20px;margin-left: 0px;width: 180px;" name="CustAddr" value="<?php echo $supp['custAddress']; ?>"disabled></label></div>
        <div id="Table-PODetail6" class="dataTables_length" aria-controls="dataTable" style="padding-top: 10px;padding-bottom: 10px;width: 100%;max-width: 360px;"><label id="Table-MOPLabel" style="margin-top: 0px;margin-bottom: 0px;width: 100%;">Mode of Payment:&nbsp; <select class="border rounded border-dark float-right" id="Table-MOPInput" style="width: 185px;border-radius: 20px;height: 28px;" name="CustMOP">
          <?php
          $result = mysqli_query($DBConnect, "SELECT MOP FROM modeofpayment");
          echo "<optgroup label='Please Select MOP'>";
          while ($rows = mysqli_fetch_array($result)){
            $MOP = $rows['MOP'];
            echo "<option value='$MOP' label='$MOP' >$MOP</option>";
            }
          echo "</optgroup></select></label>";
          ?>
        </div>
      </div>
      <div class="col-auto col-md-6 col-xl-4 text-nowrap" id="Table-PODetailCol3" style="padding-top: 0px;padding-bottom: 12px;">
        <div id="Table-PODetail7-8" class="dataTables_length" aria-controls="dataTable" style="padding-top: 0px;padding-bottom: 0px;width: 100%;max-width: 360px;">
          <div class="row" id="Table-Detail7-8">
            <div class="col" id="Table-PODetail7"><label class="col-form-label text-center" id="Table-DateOrdLabel" style="margin-top: 0px;margin-bottom: 0px;width: 100%;">Date Ordered:&nbsp;<input class="border rounded border-dark float-left" id="Table-DateOrdInput" type="date" style="width: 165px;margin-right: auto;margin-left: auto;border-radius: 20px;" name="CustDateOrd" required></label></div>
            <div class="col" id="Table-PODetail8"><label class="col-form-label text-center" id="Table-DatePickLabel" style="margin-top: 0px;margin-bottom: 0px;width: 100%;">Pickup Date:&nbsp;<input class="border rounded border-dark float-left" id="Table-DatePickInput" type="date" style="width: 165px;margin-right: auto;margin-left: auto;border-radius: 20px;" name="CustDatePick" required></label></div>
          </div>
        </div>
        <div id="Table-PODetail9" class="dataTables_length" aria-controls="dataTable" style="padding-top: 5px;padding-bottom: 10px;width: 100%;max-width: 360px;"><label id="Table-PlatformLabel" style="margin-top: 0px;margin-bottom: 0px;width: 100%;">Platform:&nbsp;<select class="border rounded border-dark float-right" id="Table-PlatformInput" style="width: 185px;border-radius: 20px;height: 28px;" name="CustPlatform" required> 
          <?php
          $result = mysqli_query($DBConnect, "SELECT platformName FROM platform");
          
          while ($rows = mysqli_fetch_array($result)){
            $platform = $rows['platformName'];
            echo "<option value='$platform' label='$platform'>$platform</option>";
            }
          echo "</optgroup></select></label>";
          ?>
        </div>
        <div id="Table-PODetail10" class="dataTables_length" aria-controls="dataTable" style="padding-top: 10px;padding-bottom: 10px;width: 100%;max-width: 360px;"><label id="Table-CourierLabel" style="margin-top: 0px;margin-bottom: 0px;width: 100%;">Courier:&nbsp;<select class="border rounded border-dark float-right" id="Table-CourierInput" style="width: 185px;border-radius: 20px;height: 28px;" name="CustCourier" required>
          <?php
          $result = mysqli_query($DBConnect, "SELECT courierName FROM courier");
          
          while ($rows = mysqli_fetch_array($result)){
            $courier = $rows['courierName'];
            echo "<option value='$courier' label='$courier'>$courier</option>";
            }
          echo "</optgroup></select></label>";
          ?>
        </div>
          </div>
        
        <?php
        echo " <table id='itemt' class='table my-0'>
        <tr class='text-center' style='background-color: #3e3e3e;font-family: Nunito, sans-serif;color: rgb(255,255,255);'>
        <th>Product Name</th>
        <th>Unit Price</th>
        <th>Quantity</th>
        <th>Amount</th>
        <th></th>
        </tr>";
        echo "<tr id='itemr'>";
        $query = "SELECT * FROM customers
        JOIN suppliers_items ON suppliers_items.supplierID = customers.custID
        JOIN tblinventory ON suppliers_items.itemID = tblinventory.pID
        WHERE suppliers.custID = '{$q}'";
        $result2 = mysqli_query($DBConnect,$query);

        echo "<td><select name = 'tblinventory'> <option>Product Name</option>";
        $srp = [];
        $ctr = 0;

        $result = mysqli_query($DBConnect, "SELECT pName, pSRP FROM tblinventory");
        while ($rows = mysqli_fetch_array($result)){
            $productName = $rows['pName'];
            $srp[] = $rows['pSRP'];
            echo "<option value='$ctr' label='$productName'>$productName</option>";
            $ctr++;
        }
        echo "</td>";
        echo "<td class='srp'>";
        for ($ctr = 0; $ctr < count($srp); $ctr++) {
            echo "<div>$srp[$ctr]</div>";
        }

        echo "</td>";
        echo "</select></td>";
        echo "<td><input type='number' min='1'  name='qty[]'  class='input-quantity' style='text-align:right' required></td>";
  // echo "<td><input type='number' name='unitp[]' min='1' class='input-quantity' required></td>";
        echo "<td><input type='text' class='amt' ttc='1' size='40' disabled='disabled'></td>";
        echo "<td><button type='button' id='btnRow' >+</button></td>";
        echo "</tr>";
        echo "<tfoot>";
        echo "<tr>";
        echo "<td></td>";
        echo "<td></td>";
        echo "<td class='text-right' style='font-weight: bold;font-size: 20px;' >TOTAL: ₱</td>";
        echo "<td id='total-cost' name='custtotal'></td>";
        echo "</tr>";
        echo "</tfoot>";
        echo "</table>";
        echo "<br><br>";
// echo "<button type='submit' class='btn btn-success' name='submit'>Submit</button>";
    ?>


        <button type='submit' class='btn btn-success' name='submit'>Submit</button>
    </form>
    <?php 
     }
    ?>
    <script src="assets/js/custom3.js"></script>
</body>
</html>
