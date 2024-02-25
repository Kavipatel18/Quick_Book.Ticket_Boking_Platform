<?php
include 'connect.php' ;
session_start();
if ($_SESSION['log'] == '')
{
    header("location:index.php");
}
include 'header.php';
?>
<style >
	.container{
        border-spacing: 10px;

      font-family: Montserrat, sans-serif;
     font-size: 18px !important;
      border: 2px solid grey;
        margin-top: 50px;
        margin-bottom: 200px;
       padding-top: 50px;
      padding-right: 70px;
      padding-bottom: 50px;
      padding-left: 100px;
      align-content: center;
    }
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

<html>
<head>
<link rel='stylesheet' href='index.css'>
<br><br>
  <h1><center><b> User Bookings &nbsp <img src="https://img.icons8.com/nolan/74/ticket.png"/></center></b></h1>

<div class="container">

  <td><a href='trainbookings.php'><button class="btn-custom"><img src="https://img.icons8.com/dusk/44/000000/train-ticket.png"/> View Train Bookings </button></a></td>
 </tr> 
<br> <br> 

<tr>

<td><a href='busbookings.php'><button class="btn-custom"><img src="https://img.icons8.com/officel/50/000000/bus-ticket.png"/> View Bus Bookings</button></a></td></td>
</tr>
</table>
</tr>
</div>
<?php include 'footer.php';
?> 

</html>