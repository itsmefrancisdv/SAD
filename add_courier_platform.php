<!DOCTYPE html>
<html>
<body>
    
    <form method="POST" action="">
        Leave the input blank if you do not wish to add anything to it.<br />
        <label for="add_courier">Add Courier: </label>
        <input type="text" id="add_courier" name="add_courier"><br />

        <label for="add_platform">Add Platform: </label>
        <input type="text" id="add_platform" name="add_platform"><br />


        <button type="submit" name="submit">Submit</button>

    </form>
<?php
require_once("connect.php"); //shud be dblazerosa

if(isset($_POST['submit'])){
   $courier = $_POST['add_courier'];
   $platform = $_POST['add_platform'];

   if(!empty($courier)){
    $add_courier = "INSERT INTO courier (courier) VALUES ('$courier')";
    mysqli_query($dbc, $add_courier) or die (mysqli_error($dbc));
   }
   
   if(!empty($platform)){
    $add_platform = "INSERT INTO platform (platform) VALUES ('$platform')";
    mysqli_query($dbc, $add_platform) or die (mysqli_error($dbc));
   }
}
?>
 
</body>
</html>