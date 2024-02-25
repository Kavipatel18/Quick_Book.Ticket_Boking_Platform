<?php
// Start PHP session (this should be at the very beginning of your PHP script)
session_start();

// Include necessary files and establish database connection
include 'connect.php';
include 'head2.php';

$email = $_POST['email'];
$password = $_POST['password'];
$sql_userdatabase = "SELECT * FROM userdatabase WHERE email = '$email' AND password = '$password'";
$result_userdatabase = mysqli_query($connect, $sql_userdatabase);

if (mysqli_num_rows($result_userdatabase) <= 0) {
    echo "<h3>Something went wrong, please login again</h3><br><br>";
    echo '<center><table><tr><td><a href="sindex.php"><button style="background-color: #354f52; border-color: #354f52; color: white"><span>Sign in Again</span></button></a></td></tr></table></center>';
} else {
    // Fetch user data
    $row_userdatabase = mysqli_fetch_array($result_userdatabase);

    // Store user data in session variables
    $_SESSION['email'] = $email;
    $_SESSION['name'] = $row_userdatabase['Name'];
    $_SESSION['userid'] = $row_userdatabase['UserID'];
    $_SESSION['Gender'] = $row_userdatabase['Gender'];
    $_SESSION['dob'] = $row_userdatabase['DoB'];
    $_SESSION['phone'] = $row_userdatabase['Phone'];

    $_SESSION['log'] = '1';

    // Redirect to the desired page (e.g., 'book.php')
    header("Location: home.php");
    exit; // Make sure to exit the script after the header redirect
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
