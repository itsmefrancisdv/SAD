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

  // $query2 = "INSERT INTO customer_orders (custID, custdateOrdered, custMOP, custStatus) VALUES
  // ('{$q}', NOW(), '{$_POST['custMOP']}', 'Pending')";
  // mysqli_query($DBConnectonnect, $query2);
  // $poid = mysqli_insert_id($DBConnectonnect);

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
<body>
<form method="POST">
<?php $q = intval($_GET['q']);
  while ($supp = mysqli_fetch_array($result3,MYSQLI_ASSOC)){  
                            $query = mysqli_query($DBConnect, "SELECT * FROM customer_orders");
                            while($row = mysqli_fetch_array($query)){
                                $id=$row["custPO"] + 1;
                            }
                            echo "<div id='Table-PODetail1' class='dataTables_length' aria-controls='dataTable' style='padding-top: 10px;padding-bottom: 10px;width: 100%;max-width: 360px;'><label id='Table-PONumLabel' style='margin-top: 0px;margin-bottom: 0px;width: 100%;'>Customer PO #:&nbsp;<input class='border rounded border-dark float-right' id='Table-PONumInput' style='border-radius: 20px;margin-left: 0px;width: 185px;' name='CustPONum' type='text' value='".$id."' size='30' disabled><br/></label></div>";
                          
                        ?>
            <div
                id="Table-PODetail2" class="dataTables_length" aria-controls="dataTable" style="padding-top: 10px;padding-bottom: 10px;width: 100%;max-width: 360px;"><label id="Table-NameLabel" style="margin-top: 0px;margin-bottom: 0px;width: 100%;">Customer Name:&nbsp;
                  <input class="border rounded border-dark float-right" type="text" id="Table-NameInput" style="border-radius: 20px;margin-left: 0px;width: 185px;" name="CustName" value="<?php echo $supp['custName']; ?>" disabled></label>
                </div>
        <div
            id="Table-PODetail3" class="dataTables_length" aria-controls="dataTable" style="padding-top: 10px;padding-bottom: 10px;width: 100%;max-width: 360px;"><label id="Table-EmailLabel" style="margin-top: 0px;margin-bottom: 0px;width: 100%;">Customer Email:&nbsp;
              <input class="border rounded border-dark float-right" type="email" id="Table-EmailInput" style="width: 185px;border-radius: 20px;margin-left: 0px;" autocomplete="on" name="CustEmail" value="<?php echo $supp['custEmail']; ?>" disabled></label>
            </div>
          
    <div id="Table-PODetail4" class="dataTables_length" aria-controls="dataTable" style="padding-top: 10px;padding-bottom: 10px;width: 100%;max-width: 360px;"><label id="Table-NumLabel" style="margin-top: 0px;margin-bottom: 0px;width: 100%;">Customer Number:&nbsp;
      <input class="border rounded border-dark float-right" type="tel" id="Table-NumInput" style="border-radius: 20px;width: 185px;" autocomplete="on" name="CustNum" value="<?php echo $supp['custNumber']; ?>" disabled></label></div>
    <div
        id="Table-PODetail5" class="dataTables_length" aria-controls="dataTable" style="padding-top: 10px;padding-bottom: 10px;width: 100%;max-width: 360px;"><label id="Table-AddrLabel" style="margin-top: 0px;margin-bottom: 0px;width: 100%;">Customer Address:&nbsp;
          <input class="border rounded border-dark float-right" type="text" id="Table-AddrInput" style="border-radius: 20px;margin-left: 0px;width: 185px;" name="CustAddr" value="<?php echo $supp['custAddress']; ?>"disabled></label></div>
<div
    id="Table-PODetail6" class="dataTables_length" aria-controls="dataTable" style="padding-top: 10px;padding-bottom: 10px;width: 100%;max-width: 360px;"><label id="Table-MOPLabel" style="margin-top: 0px;margin-bottom: 0px;width: 100%;">Mode of Payment:&nbsp;
      <select class="border rounded border-dark float-right" id="Table-MOPInput" style="width: 185px;border-radius: 20px;height: 28px;" name="CustMOP">
        
        <?php
        $result = mysqli_query($DBConnect, "SELECT MOP FROM modeofpayment");
        echo "<optgroup label='Please Select MOP'>";
        while ($rows = mysqli_fetch_array($result)){
          $MOP = $rows['MOP'];
          echo "<option value='$MOP' label='$MOP' name='custMOP'>$MOP</option>";
          }
        echo "</optgroup></select></label>";
        ?>
      </div>
        
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
          echo "<option value='$platform' label='$platform' name='custPlatform'>$platform</option>";
          }
        echo "</optgroup></select></label>";
        ?>
        </div>
        <div id="Table-PODetail10" class="dataTables_length" aria-controls="dataTable" style="padding-top: 10px;padding-bottom: 10px;width: 100%;max-width: 360px;"><label id="Table-CourierLabel" style="margin-top: 0px;margin-bottom: 0px;width: 100%;">Courier:&nbsp;<select class="border rounded border-dark float-right" id="Table-CourierInput" style="width: 185px;border-radius: 20px;height: 28px;" name="CustCourier" required>
        
        <?php
        $result = mysqli_query($DBConnect, "SELECT courierName FROM courier");
        
        while ($rows = mysqli_fetch_array($result)){
          $courier = $rows['courierName'];
          echo "<option value='$courier' label='$courier' name='custCourier'>$courier</option>";
          }
        echo "</optgroup></select></label>";
        ?>
        </div>
        <?php }?>
        
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

//   echo "<td><select name='products[]'>";
//   while ($result = mysqli_fetch_array($result2,MYSQLI_ASSOC)){
//     echo "<option value='{$result['itemID']}'>{$result['pName']}</option>";
//   }
echo "<td><select name = 'tblinventory'>
        <option>Product Name</option>";
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
  echo "<td class='text-right' style='font-weight: bold;font-size: 20px;' >TOTAL:</td>";
  echo "<td id='total-cost'></td>";
  echo "</tr>";
  echo "</tfoot>";
echo "</table>";
echo "<br><br>";
// echo "<button type='submit' class='btn btn-success' name='submit'>Submit</button>";
?>


<button type='submit' class='btn btn-success' name='submit'>Submit</button>
</form>



        <script src="assets/js/custom3.js"></script>
    </body>
</html>
