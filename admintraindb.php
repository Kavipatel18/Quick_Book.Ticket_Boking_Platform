<?php
include 'connect.php';
session_start();
if ($_SESSION['log'] == '') {
     header("location:index.php");
}
include 'head1.php';
?>

<!DOCTYPE html>
<html>
<link rel='stylesheet' href='index.css'>

<style>
     
     table#data {
          font-size: 16px;
          font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          border-spacing: 0;
          width: 100%;
     }

     #data td,
     #data th {
          border: 1px solid #ddd;
          text-align: left;
          padding: 8px;
     }

     #data tr:nth-child(even) {
          background-color: #f2f2f2
     }

     #data th {
          padding-top: 11px;
          padding-bottom: 11px;
          background-color: #354f52;
          color: white;
     }
     .btn-custom {
    background-color:#333!important;
    color: #fff!important;
    border: none!important;
    border-radius: 5px!important;
    padding: 10px 10px!important;
    font-size: 15px!important;
    font-weight: bold!important;
    text-transform: uppercase!important;
    text-decoration: none!important;
    transition: background-color 0.3s ease, transform 0.2s ease!important;
    display: inline-block!important;
    margin-top: 10px!important;
  }

  .btn-custom:hover {
    background-color: #333!important;
    transform: scale(1.05)!important;
    cursor: pointer!important;
    color:goldenrod!important; 
  }
</style>

<head>
     <title>TRAIN PASSENGERS DATABASE</title>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
     <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
     <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
     <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
</head>

<body>
     
     <div class="container">
          <h3 align="center">TRAIN PASSENGERS DATABASE</h3>
          <br />
          <div class="table-responsive">
               <table id="data" class="table table-striped table-bordered">
                    <!--<thead>-->
                         <tr>
                              <th> Date & Time</th>
                              <th> Booking ID </th>
                              <th> Name </th>
                              <th> Source </th>
                              <th> Destination </th>
                              <th> Amount Paid</th>
                         </tr>
                    <!--</thead>-->
                    <tbody>
                         <?php
                         $result = mysqli_query($connect, "select * From transactions");
                         while ($row = mysqli_fetch_assoc($result)) :

                         ?>
                              <tr>
                                   <td><?php echo $row['Date']; ?></td>
                                   <td><?php echo $row['T_No.']; ?></td>
                                   <td><?php echo $row['Name']; ?></td>
                                   <td><?php echo $row['source']; ?></td>
                                   <td><?php echo $row['dest']; ?></td>
                                   <td><?php echo $row['Amt']; ?></td>

                              </tr>

                         <?php endwhile; ?>


                    </tbody>

               </table>
          </div>
     </div>
</body>

</html>
<script>
     $(document).ready(function() {
          $('#data').DataTable({
               "order": [
                    [1, "desc"]
               ]
          });
     });
</script>


<table align='center'>
     <tr><!--<td><a href='pay.php'><button>Proceed</button></a></td>-->
          <td><a href='admin.php' class="btn-custom">Go Back </a></td>
     </tr>