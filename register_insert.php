<html>
<style>
    .table {
        font-family: Montserrat, sans-serif;
        align-items: center;
		color: #354f52;
        text-align: center; /* Center text within the table */
    }

    body {
        background-color: #F5F1F0; /* Light grayish background */
        font-family: Montserrat, sans-serif;
        margin: 0;
        padding: 0;
    }

    h3 {
        text-align: center;
        font-size: 30px; /* Increase font size for the heading */
        color: #354f52; /* Dark gray text color */
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
        background-color: #354f52!important; /* Darker color on hover */
		border-color: #354f52!important;
		color: goldenrod !important;
    }
</style>

<link rel="stylesheet" type="text/css" href="index.css">
<body>
<?php
include 'connect.php';
include 'head2.php';

$name = $_POST['name'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$password = $_POST['password'];
$Gender = $_POST['Gender'];
$Phone = $_POST['phone'];

$sql_userdatabase = "Insert into userdatabase(Name ,Email , Gender, password , dob , Phone) values ('$name' , '$email' , '$Gender', '$password', '$dob', '$Phone')";

try {
    if (mysqli_query($connect, $sql_userdatabase) == true) {
        echo "<h3>You have been successfully registered</h3><br><br>";
        echo '<center><table><tr><td><a href="sindex.php"><button style="background-color: #354f52; border-color: #354f52; color: white"><span>Sign in!</span></button></a></td></tr></table></center>';
    } else {
        // Handle the case when the email is already in use (duplicate entry)
        throw new Exception("Email already in use. Please register with a different email.");
    }
} catch (Exception $e) {
    // Handle the exception by displaying an error message
    echo "<h3>Registration Unsuccessful: " . $e->getMessage() . "</h3><br><br>";
	echo '<center><table><tr><td><a href="register.php"><button style="background-color: #354f52; border-color: #354f52; color: white"><span>Register Again</span></button></a></td></tr></table></center>';

}
?>
</body>
</html>