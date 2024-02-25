<?php
session_start();
?>
<html>
<?php
session_destroy();
?>
<?php
include 'homehead.php';
?>
<style>
 body {
  font-family: 'Montserrat', sans-serif;
  background-image: url('your-body-background-image.jpg');
  background-size: cover;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-color: #f0f0f0; /* Fallback background color */
  color: #333;
  margin: 0;
  padding: 0;
}
.container {
    font-family: Montserrat, sans-serif;
    font-size: 20px;
    font-weight: bold;
    border: 2px solid #ccc;
    margin-top: 50px;
    margin-bottom: 50px;
    padding: 30px;
    text-align: center;
    position: relative;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    background: linear-gradient(45deg, #003399, #990033, goldenrod, lightseagreen);
   
    background-size: 400% 400%;
    animation: gradientBackground 10s ease infinite;
  }
  @keyframes gradientBackground {
    0% {
      background-position: 0% 50%;
    }
    50% {
      background-position: 100% 50%;
    }
    100% {
      background-position: 0% 50%;
    }
  }
  .container h2 {
    text-transform: capitalize;
    margin-bottom: 20px;
    color: #fff;
  }
  .container p {
    color: #fff;
    line-height: 1.6;
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
<body>
  <div class="container">
    <h2>Welcome to Quick-Book</h2>
    <p>Your trusted partner for hassle-free travel bookings. Whether you need to book train tickets for your daily commute or plan a long-distance bus journey, we've got you covered. Explore a wide range of travel options and enjoy a seamless booking experience with Quick-Book.</p>
    <a href='book.php' class="btn btn-custom"><img src="https://img.icons8.com/nolan/54/train.png" />&nbsp;&nbsp;Book Train Tickets</a>
    <br><br>
    <a href='bookbus.php' class="btn btn-custom"><img src="https://img.icons8.com/nolan/54/bus.png" />&nbsp;&nbsp;Book Bus Tickets</a>
  </div>
  <?php include 'footer.php'; ?>
</body>
</html>


