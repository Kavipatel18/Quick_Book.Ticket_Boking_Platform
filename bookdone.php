<?php
include 'connect.php' ;


session_start();
if ($_SESSION['log'] == '')
{
    header("location:index.php");
}
include 'header.php';
?>
<style>
	.container{
        border-spacing: 10px;

      font-family: Montserrat, sans-serif;
     font-size: 18px !important;
      border: 2px solid grey;
        margin-top: 30px;
        margin-bottom: 50px;
       padding-top: 50px;
      padding-right: 50px;
      padding-bottom: 50px;
      padding-left: 150px;
      align-content: center;
    }
	#font{
      font-family: Montserrat, sans-serif;
     font-size: 18px !important;
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

 <link rel='stylesheet' href='index.css'>


           
           
           
           <script type="text/javascript">
        
           </script>
          

</head>
 <?php 
   $result = mysqli_query($connect , "SELECT * FROM `transactions` WHERE `email`='".$_SESSION['email']."' ORDER BY `T_No.` DESC LIMIT 1");
  while ($row = mysqli_fetch_assoc($result)): 
    $tno = $row["T_No."];
    $_SESSION['tno']= $tno ;
  ?>

<body style="background-color: F5F1F0;">
	 <h2 align="center"><b> Booking Summary</b></h2>
           <br>


				<table class="table table-striped" id="font" >

				<tr>
					<th>Booking ID</th>
					<td><?php echo $row['T_No.']; ?></td>
				</tr>
			
				<tr>
					<th>Name</th>
					<td><?php echo $_SESSION['name'] ?></td>
				</tr>

				<tr>
					<th>Email</th>
					<td><?php echo $_SESSION['email'] ?></td>
				</tr>

				

				<tr>
					<th>Source Station</th>
					<td><?php echo $_SESSION['source'] ?></td>
				</tr>

				<tr>
					<th>Destination</th>
					<td><?php echo $_SESSION['dest'] ?></td>
				</tr>


				<tr>
					<th>Amount</th>
					<td>₹&nbsp&nbsp<?php echo $_SESSION['final'] ?></td>
				</tr>

				
			</table>
	


<table align = "Center">
<tr>
<td>
<div><td><a  href="print.php?pid='<?php echo $_SESSION['tno']?>' " target="_blank" ><button class="btn btn-custom"><h4> Print Ticket<br></h4></button></a></td></td>
</td>
</tr>
</body style="background-color: F5F1F0;">
</div>
 <?php endwhile; ?>


 </html>

