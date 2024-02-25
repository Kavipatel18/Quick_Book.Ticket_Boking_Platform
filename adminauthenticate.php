<?php
session_start();
include 'connect.php' ;
include 'head2.php';

$email = $_POST['email'];
$password = $_POST['password'];
$sql_admindatabase = "SELECT * FROM admindatabase WHERE email = '$email' AND PASSWORD='$password' ";
$result_admindatabase = mysqli_query($connect, $sql_admindatabase);

if(mysqli_num_rows($result_admindatabase) != 1)
{
	echo "<h3>Something went wrong Please sign in again<br> Thank you!! </h3><br><br>";
 	echo '<center><table><tr><td><a href="adminindex.php"><button style="background-color: #354f52; border-color: #354f52; color: white"><span>Sign In ! &nbsp&nbspAgain</span></button></a></td></tr></table></center>';
}

else
{
	$row_admindatabase = mysqli_fetch_array($result_admindatabase);
	
	$_SESSION['email']=$email;
	$_SESSION['name']=$row_admindatabase['Name'];
	$_SESSION['userid']=$row_admindatabase['UserID'];
	$_SESSION['log']= '1' ;

	header("Location:admin.php");
	exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            background-color: #F5F1F0;
            font-family: Montserrat, sans-serif;
            margin: 0;
            padding: 0;
        }

        h3 {
            text-align: center;
            font-size: 30px;
            color: #354f52;
            margin-top: 20px;
        }

        button {
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 18px;
            border-radius: 5px;
        }

        button:hover {
            background-color: #354f52 !important;
            border-color: #354f52 !important;
            color: goldenrod !important;
        }
    </style>
</head>
</html>
