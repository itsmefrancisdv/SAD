<?php
require_once('connect.php');

$q = intval($_GET['q']);

$sql="SELECT * FROM customers WHERE custID = '".$q."'";
$result = mysqli_query($DBConnect,$sql);

$sql2 = "SELECT * FROM customers WHERE custID = '".$q."'";
$result3 = mysqli_query($DBConnect,$sql2);

if (isset($_POST['submit'])) {
  $squery = "SELECT * FROM customers WHERE custID='{$q}'";
  $sresult = mysqli_query($DBConnect, $squery);
  $supp = mysqli_fetch_array($sresult, MYSQLI_ASSOC);

  $query2 = "INSERT INTO purchase_orders (supplierID,dateOrdered,paymentMethod,status) VALUES
  ('{$q}',NOW(),'{$_POST['CustMOP']}','Pending')";
  mysqli_query($DBConnect, $query2);
  $poid = mysqli_insert_id($DBConnect);

  for ($i = 0; $i < sizeof($_POST['products']); $i++) {
    $amount = $_POST['qty'][$i] * $_POST['unitp'][$i];
    $query3 = "INSERT INTO purchase_order_items (purchaseID,itemID,quantity,unitPrice,amount) VALUES
    ('{$poid}','{$_POST['products'][$i]}','{$_POST['qty'][$i]}','{$_POST['unitp'][$i]}','{$amount}')";
    mysqli_query($DBConnect, $query3);
  }
}

?>
<?php while ($supp = mysqli_fetch_array($result3,MYSQLI_ASSOC)){  ?>

            <div
                id="Table-PODetail2" class="dataTables_length" aria-controls="dataTable" style="padding-top: 10px;padding-bottom: 10px;width: 100%;max-width: 360px;"><label id="Table-NameLabel" style="margin-top: 0px;margin-bottom: 0px;width: 100%;">Customer Name:&nbsp;
                  <input class="border rounded border-dark float-right" type="text" id="Table-NameInput" style="border-radius: 20px;margin-left: 0px;width: 185px;" name="CustName" value="<?php echo $supp['custName']; ?>" disabled></label>
                </div>
        <div
            id="Table-PODetail3" class="dataTables_length" aria-controls="dataTable" style="padding-top: 10px;padding-bottom: 10px;width: 100%;max-width: 360px;"><label id="Table-EmailLabel" style="margin-top: 0px;margin-bottom: 0px;width: 100%;">Customer Email:&nbsp;
              <input class="border rounded border-dark float-right" type="email" id="Table-EmailInput" style="width: 185px;border-radius: 20px;margin-left: 0px;" autocomplete="on" name="CustEmail" value="<?php echo $supp['custEmail']; ?>" disabled></label>
            </div>
          </div>
    <div id="Table-PODetail4" class="dataTables_length" aria-controls="dataTable" style="padding-top: 10px;padding-bottom: 10px;width: 100%;max-width: 360px;"><label id="Table-NumLabel" style="margin-top: 0px;margin-bottom: 0px;width: 100%;">Customer Number:&nbsp;
      <input class="border rounded border-dark float-right" type="tel" id="Table-NumInput" style="border-radius: 20px;width: 185px;" autocomplete="on" name="CustNum" value="<?php echo $supp['custNumber']; ?>" disabled></label></div>
    <div
        id="Table-PODetail5" class="dataTables_length" aria-controls="dataTable" style="padding-top: 10px;padding-bottom: 10px;width: 100%;max-width: 360px;"><label id="Table-AddrLabel" style="margin-top: 0px;margin-bottom: 0px;width: 100%;">Customer Address:&nbsp;
          <input class="border rounded border-dark float-right" type="text" id="Table-AddrInput" style="border-radius: 20px;margin-left: 0px;width: 185px;" name="CustAddr" value="<?php echo $supp['custAddress']; ?>"disabled></label></div>
<div
    id="Table-PODetail6" class="dataTables_length" aria-controls="dataTable" style="padding-top: 10px;padding-bottom: 10px;width: 100%;max-width: 360px;"><label id="Table-MOPLabel" style="margin-top: 0px;margin-bottom: 0px;width: 100%;">Mode of Payment:&nbsp;
      <select class="border rounded border-dark float-right" id="Table-MOPInput" style="width: 185px;border-radius: 20px;height: 28px;" name="CustMOP">
        <optgroup label="Please Select MOP">
          <option value="Cash on Delivery">Cash on Delivery</option>
          <option value="Credit/Debit Card">Credit/Debit Card</option>
          <option value="Online Bank Payment">Online Bank Payment</option>
          <option value="G-Cash">G-Cash</option>
          <option value="Shopee Pay">Shopee Pay</option>
        </optgroup></select></label></div>
        
        <div id="Table-PODetail7-8" class="dataTables_length" aria-controls="dataTable" style="padding-top: 0px;padding-bottom: 0px;width: 100%;max-width: 360px;">
            <div class="row" id="Table-Detail7-8">
                <div class="col" id="Table-PODetail7"><label class="col-form-label text-center" id="Table-DateOrdLabel" style="margin-top: 0px;margin-bottom: 0px;width: 100%;">Date Ordered:&nbsp;<input class="border rounded border-dark float-left" id="Table-DateOrdInput" type="date" style="width: 165px;margin-right: auto;margin-left: auto;border-radius: 20px;" name="CustDateOrd" required></label></div>
                <div class="col" id="Table-PODetail8"><label class="col-form-label text-center" id="Table-DatePickLabel" style="margin-top: 0px;margin-bottom: 0px;width: 100%;">Pickup Date:&nbsp;<input class="border rounded border-dark float-left" id="Table-DatePickInput" type="date" style="width: 165px;margin-right: auto;margin-left: auto;border-radius: 20px;" name="CustDatePick" required></label></div>
            </div>
        </div>
        <div id="Table-PODetail9" class="dataTables_length" aria-controls="dataTable" style="padding-top: 5px;padding-bottom: 10px;width: 100%;max-width: 360px;"><label id="Table-PlatformLabel" style="margin-top: 0px;margin-bottom: 0px;width: 100%;">Platform:&nbsp;<select class="border rounded border-dark float-right" id="Table-PlatformInput" style="width: 185px;border-radius: 20px;height: 28px;" name="CustPlatform" required><option value="Facebook /Instagram ">Facebook /Instagram </option><option value="Shopee">Shopee</option></select></label></div>
        <div id="Table-PODetail10" class="dataTables_length" aria-controls="dataTable" style="padding-top: 10px;padding-bottom: 10px;width: 100%;max-width: 360px;"><label id="Table-CourierLabel" style="margin-top: 0px;margin-bottom: 0px;width: 100%;">Courier:&nbsp;<select class="border rounded border-dark float-right" id="Table-CourierInput" style="width: 185px;border-radius: 20px;height: 28px;" name="CustCourier" required><option value="Grab">Grab</option><option value="Lalamove">Lalamove</option><option value="MrSpeedy">MrSpeedy</option><option value="Provided by Shopee">Provided by Shopee</option></select></label></div>
        </div>
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
  echo "<td><input type='number' min='1'  name='qty[]'  class='input-quantity' required></td>";
  // echo "<td><input type='number' name='unitp[]' min='1' class='input-quantity' required></td>";
  echo "<td><input type='text' class='amt' ttc='1' size='40' disabled='disabled'></td>";
  echo "<td><button type='button' id='btnRow' onclick='addProduct()'>+</button></td>";
  echo "</tr>";
  echo "<tfoot>";
  echo "<tr>";
  echo "<td></td>";
  echo "<td></td>";
  echo "<td class='text-right' style='font-weight: bold;font-size: 20px;' id='totalcost'>TOTAL COST:</td>";
  echo "<td></td>";
  echo "</tr>";
  echo "</tfoot>";
echo "</table>";
echo "<br><br>";
echo "<button type='submit' class='btn btn-success' name='submit'>Submit</button>";
?>

<?php } ?>
<html>
    <body>
        <script src="assets/js/custom3.js"></script>
    </body>
</html>
