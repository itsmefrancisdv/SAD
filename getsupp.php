<?php
require_once('mysql_connect.php');

$q = intval($_GET['q']);

$sql="SELECT * FROM suppliers WHERE supplierID = '".$q."'";
$result = mysqli_query($dbc,$sql);

$sql2 = "SELECT * FROM suppliers WHERE supplierID = '".$q."'";
$result3 = mysqli_query($dbc,$sql2);

if (isset($_POST['submit'])) {
  $squery = "SELECT * FROM suppliers WHERE supplierID='{$q}'";
  $sresult = mysqli_query($dbc, $squery);
  $supp = mysqli_fetch_array($sresult, MYSQLI_ASSOC);

  $query2 = "INSERT INTO purchase_orders (supplierID,dateOrdered,paymentMethod,status) VALUES
  ('{$q}',NOW(),'{$_POST['CustMOP']}','Pending')";
  mysqli_query($dbc, $query2);
  $poid = mysqli_insert_id($dbc);

  for ($i = 0; $i < sizeof($_POST['products']); $i++) {
    $amount = $_POST['qty'][$i] * $_POST['unitp'][$i];
    $query3 = "INSERT INTO purchase_order_items (purchaseID,itemID,quantity,unitPrice,amount) VALUES
    ('{$poid}','{$_POST['products'][$i]}','{$_POST['qty'][$i]}','{$_POST['unitp'][$i]}','{$amount}')";
    mysqli_query($dbc, $query3);
  }
}

?>
<?php while ($supp = mysqli_fetch_array($result3,MYSQLI_ASSOC)){  ?>

            <div
                id="Table-PODetail2" class="dataTables_length" aria-controls="dataTable" style="padding-top: 10px;padding-bottom: 10px;width: 100%;max-width: 360px;"><label id="Table-NameLabel" style="margin-top: 0px;margin-bottom: 0px;width: 100%;">Supplier Name:&nbsp;
                  <input class="border rounded border-dark float-right" type="text" id="Table-NameInput" style="border-radius: 20px;margin-left: 0px;width: 185px;" name="CustName" value="<?php echo $supp['supplierName']; ?>" disabled></label>
                </div>
        <div
            id="Table-PODetail3" class="dataTables_length" aria-controls="dataTable" style="padding-top: 10px;padding-bottom: 10px;width: 100%;max-width: 360px;"><label id="Table-EmailLabel" style="margin-top: 0px;margin-bottom: 0px;width: 100%;">Supplier Email:&nbsp;
              <input class="border rounded border-dark float-right" type="email" id="Table-EmailInput" style="width: 185px;border-radius: 20px;margin-left: 0px;" autocomplete="on" name="CustEmail" value="<?php echo $supp['supplierEmail']; ?>" disabled></label>
            </div>
          </div>
    <div id="Table-PODetail4" class="dataTables_length" aria-controls="dataTable" style="padding-top: 10px;padding-bottom: 10px;width: 100%;max-width: 360px;"><label id="Table-NumLabel" style="margin-top: 0px;margin-bottom: 0px;width: 100%;">Supplier Number:&nbsp;
      <input class="border rounded border-dark float-right" type="tel" id="Table-NumInput" style="border-radius: 20px;width: 185px;" autocomplete="on" name="CustNum" value="<?php echo $supp['supplierNumber']; ?>" disabled></label></div>
    <div
        id="Table-PODetail5" class="dataTables_length" aria-controls="dataTable" style="padding-top: 10px;padding-bottom: 10px;width: 100%;max-width: 360px;"><label id="Table-AddrLabel" style="margin-top: 0px;margin-bottom: 0px;width: 100%;">Supplier Address:&nbsp;
          <input class="border rounded border-dark float-right" type="text" id="Table-AddrInput" style="border-radius: 20px;margin-left: 0px;width: 185px;" name="CustAddr" value="<?php echo $supp['supplierAddress']; ?>"disabled></label></div>
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
<?php
echo " <table id='itemt' class='table my-0'>
<tr class='text-center' style='background-color: #3e3e3e;font-family: Nunito, sans-serif;color: rgb(255,255,255);'>
<th>Product Name</th>
<th>Quantity</th>
<th>Unit Price</th>
<th>Amount</th>
<th></th>
</tr>";
  echo "<tr id='itemr'>";
  $query = "SELECT * FROM suppliers
  JOIN suppliers_items ON suppliers_items.supplierID = suppliers.supplierID
  JOIN tblinventory ON suppliers_items.itemID = tblinventory.pID
  WHERE suppliers.supplierID = '{$q}'";
  $result2 = mysqli_query($dbc,$query);

  echo "<td><select name='products[]'>";
  while ($result = mysqli_fetch_array($result2,MYSQLI_ASSOC)){
    echo "<option value='{$result['itemID']}'>{$result['pBrand']} {$result['pName']}</option>";
  }
  echo "</select></td>";
  echo "<td><input type='number' min='1'  name='qty[]' onchange='multiply(this)' required></td>";
  echo "<td><input type='decimal'  name='unitp[]' step='.01' onchange='multiply(this)' required></td>";
  echo "<td><input type='text' id='amt' ttc='1' size='40' disabled='disabled'></td>";
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
