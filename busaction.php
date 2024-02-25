<?php


include 'connect.php' ;
session_start();
if ($_SESSION['log'] == '')
{
    header("location:index.php");
}

include 'header.php';

$source = $_POST['source'];
$dest = $_POST['dest'];

$no = $_POST['number'];

if ($source == $dest)
{
  echo"<h3><center>Selected source and destination same , Please refill the details  </center></h3><br><br>";
  echo'<center>';
}
else{
$sql_price="SELECT * FROM `pricebus` WHERE `source` LIKE '$source' AND `dest` LIKE '$dest'";
$result = $connect->query($sql_price);
while($row = $result->fetch_assoc()){
$final = $row["Price"]*$no  ;
$busnum = $row["Bus_No."]  ;

echo "<h3><center>Total Fare (".$source." - ".$dest."): ₹ ".$final." </center></h3>";
echo'<center>
<form action="buspay.php">
<button type="submit" align="center" class="btn btn-custom">
Checkout</button></form>
';
 }
$_SESSION['final']= $final ;
$_SESSION['source']=$source;
$_SESSION['dest']=$dest;
$_SESSION['busnum']=$busnum;
$_SESSION['NoOfpass']=$no;
}
?>
<style>
  .btn-custom {
    background-color: #333;
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 10px 10 px;
    font-size: 15px;
    font-weight: bold;
    text-transform: uppercase;
    text-decoration: none;
    transition: background-color 0.3s ease, transform 0.2s ease;
    display: inline-block;
    margin-top: 10px;
  }

  .btn-custom:hover {
    background-color: #333;
    transform: scale(1.05);
    cursor: pointer;
    color:goldenrod!important; 
  }
</style>

<center>
<form action="bookbus.php">
<button type="submit" align="center" class="btn btn-custom" >Go Back</button></form>

