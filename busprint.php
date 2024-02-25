<?php ?>
<a href="busbookdone.php"><img src="icons8-home-100.png"/></a>
<h1 align="center"><mark>Ticket Details</mark></h1>

<style >

.ticket {

    font-family: Montserrat, sans-serif;
}

.ticketdesign {
  background-color: lightgray;
  align-self:auto;
  height: 30em;
  float: left;
  object-position: center;
  padding: 1em;
  margin-top: 10px;
  margin-left: 60px;

}


.ticketstructure {
  align-content: center;
  border-top-left-radius: 8px;
  border-bottom-left-radius: 8px;
   border-top-right-radius: 8px;
   border-bottom-right-radius: 8px;



  width: 75em;
}

h3 {
  font-size: 20px;
  margin-top: 0;
      font-family: Montserrat, sans-serif;

 
}
h4 {
  font-size: 15px;
  margin-top: 0;
      font-family: Montserrat, sans-serif;
      color:black;
}
span {
  color: black;
}
#options {
	align-content:center;
	align-items:center;
    text-align: center;
}
.printable {
   padding-left: 
   10px;text-align:left;
}
</style>

           <?php
          include 'connect.php';
		  $pid=$_GET['pid'];
			
			$sel="SELECT * FROM `bustransactions` WHERE `T_No.` =$pid";
			$rs=$connect->query($sel);
			while($row=$rs->fetch_assoc())
			{

				?>

	<div class="ticket " id="printable">
  <div class="ticketdesign ticketstructure">

<h3 align="left"><b>Quick Book</b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b>Bus-Ticket</b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Ticket No : <?php echo $row['T_No.'] ?> </h3></span>
    <div class="title">
    	<br>
   <h3 align="left"><span><?php echo $row['source'] ?> &nbsp&nbsp To &nbsp&nbsp <?php echo $row['dest'] ?>  </span></h3>
   <h4 align="left"><span>Name : &nbsp <?php echo $row['Name'] ?></span></h4>
   <h4 align="left"><span>Date & Time : &nbsp <?php echo $row['Date'] ?></span></h4>
   
   <h4 align="left"><span>Bus No : &nbsp <?php echo $row['Bus_No'] ?></span></h4>
   <h4 align="left"><span>No of Passengers :&nbsp <?php echo $row['NoOfpass'] ?> </span></h4>
   <h4 align="left"><span>Amount : &nbsp ₹<?php echo $row['Amt'] ?> </span></h4>
   <h3 align="center"><span>Wish you happy & safe journey</span> </h3>
</div>
    </div>
</div>


			<?php
		}
		?>

</div>
