<?php


include 'connect.php' ;
session_start();
if ($_SESSION['log'] == '')
{
    header("location:sindex.php");
}
include 'header.php';


$source = $_POST['source'];
$dest = $_POST['dest'];
$class = $_POST['class'];
$type = $_POST['type'];
$no = $_POST['number'];

if ($source == $dest)
{
  echo"<h3><center>Selected source and destination same , Please refill the details  </center></h3><br><br>";
  echo'<center>';
}
else{
	
$sql_price="SELECT * FROM `price` WHERE `source` LIKE '$source' AND `dest` LIKE '$dest' AND `type` LIKE '$type' AND `class` = '$class'";
$result = $connect->query($sql_price);
while($row = $result->fetch_assoc()){
$final = $row["Price"]  ;
$Route = $row["Route"];
$final=$final*$no;
echo "<center><b><h3>Total Fare (".$source."-".$dest."): ₹".$final."</center></h3></b>";
echo "  <h3><center><b></b></center></h3>";
echo'<center>
<form action="pay.php"><button  class="btn btn-custom" type="submit"; align=center;">Checkout</button>
</form>
';
 }
$_SESSION['final']= $final ;
$_SESSION['source']=$source;
$_SESSION['dest']=$dest;
$_SESSION['Class']=$class;
$_SESSION['Type']=$type;
$_SESSION['NoOfpass']=$no;
$_SESSION['Route']=$source.$Route.$dest;


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
<form action="book.php">
<button type="submit" align="center" class="btn btn-custom" >Go Back</button></form>

