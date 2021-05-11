<?php
require_once('mysql_connect.php');

if (isset($_GET['submit'])) {
  $squery = "SELECT * FROM suppliers WHERE supplierID='{$_GET['suppName']}'";
  $sresult = mysqli_query($dbc, $squery);
  $supp = mysqli_fetch_array($sresult, MYSQLI_ASSOC);

  $query2 = "INSERT INTO purchase_orders (supplierID,dateOrdered,paymentMethod,status) VALUES
  ('{$_GET['suppName']}',NOW(),'{$_GET['suppMOP']}','Pending')";
  mysqli_query($dbc, $query2);
  $poid = mysqli_insert_id($dbc);

  for ($i = 0; $i < sizeof($_GET['products']); $i++) {
    $amount = $_GET['qty'][$i] * $_GET['unitp'][$i];
    $query3 = "INSERT INTO purchase_order_items (purchaseID,itemID,quantity,unitPrice,amount) VALUES
    ('{$poid}','{$_GET['products'][$i]}','{$_GET['qty'][$i]}','{$_GET['unitp'][$i]}','{$amount}')";
    mysqli_query($dbc, $query3);
  }
  header('Location: reordersupplierslist.php');
}

?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
  table,
  th,
  td {
    border: 1px solid black;
  }
</style>

<div class="container">
       <table class="table table-striped" >
          <tbody>
             <tr>
                <td colspan="1">
                   <form class="well form-horizontal">
                     <label for="suppName">Supplier Name</label><br>
                     <select name="suppName" id="suppName" onchange='showUser(this.value)' required>
                       <option value=""></option>
                       <?php
                       $query = "SELECT * FROM suppliers";
                       $result = mysqli_query($dbc,$query);

                       while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                         echo "<option value='{$row['supplierID']}'>{$row['supplierName']}</option>";
                       }
                       ?>
                     </select>
                       <br><br>
                       <div id="suppinfo">

                   </div>
                   </form>
                </td>
             </tr>
          </tbody>
       </table>
    </div>

    <script>
    function showUser(str) {
  if (str == "") {
    document.getElementById("suppinfo").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("suppinfo").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","getsupp.php?q="+str,true);
    xmlhttp.send();
  }
}
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
</script>
