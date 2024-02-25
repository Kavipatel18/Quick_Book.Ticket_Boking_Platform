<?php
include 'connect.php';
include 'head2.php';
?>

<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            background-color: #F5F1F0; /* Light grayish background */
            font-family: Montserrat, sans-serif;
        }

        .container {
			display: flex;
			justify-content: center;
            text-align: center;
			padding:10px;
            margin: 10px;
        }

        .container img {
            width: 80px; /* Adjust the image size as needed */
        }

        h2 {
            text-align: center;
            font-size: 24px; /* Increase font size for the heading */
            color: #333; /* Dark gray text color */
        }

        .table {
            font-family: Montserrat, sans-serif;
			/*background: linear-gradient(45deg, #003399, #990033, goldenrod, lightseagreen);*/
            margin: 0 auto;
            width: 95%; /* Adjust the width of the table as needed */
        }

        .table h3 {
            margin: 0;
            font-size: 18px; /* Adjust font size for labels */
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="tel"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        input[type="radio"] {
            margin-right: 10px;
        }

        .submit-button {
            background-color: #333; /* Dark gray button background */
            color: white;
            border: 1px solid #333;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .submit-button:hover {
            background-color: #354f52; /* Slightly darker gray on hover */
        }

        .sign-in-link {
            text-align: center;
            font: 10px;
            margin-top: 10px;
        }

        .sign-in-link a {
			color: #354f52;
            text-decoration: none;
        }
    </style>
    <link rel='stylesheet' href='index.css'>
    <title>Registration Page</title>
</head>

<body>
    <div class="container">
        <center><h2><b>Registration<img src="https://img.icons8.com/bubbles/250/000000/add-user-male.png" alt="User Icon"></b></h2></center>
    </div>

    <form method='post' action='register_insert.php'>
        <table class="table">
            <tr>
                <td><h3>Name:</h3></td>
                <td colspan='2'><input type="text" name="name" maxlength='50' required></td>
            </tr>
            <tr>
                <td><h3>Email Id:</h3></td>
                <td colspan='2'><input type="email" name="email" maxlength='50' required></td>
            </tr>
            <tr>
                <td><h3>Gender:</h3></td>
                <td><input type="radio" name="Gender" value="M">Male</td>
                <td><input type="radio" name="Gender" value="F" required>Female</td>
            </tr>
            <tr>
                <td><h3>Date of Birth:</h3></td>
                <td colspan='2'><input type="text" name="dob" maxlength='50' placeholder='yyyy-mm-dd' required></td>
            </tr>
            <tr>
                <td><h3>Password:</h3></td>
                <td colspan='2'><input type="password" name="password" maxlength='50' required></td>
            </tr>
            <tr>
                <td><h3>Contact No.</h3></td>
                <td colspan='2'><input type="tel" name="phone" maxlength='10' required></td>
            </tr>
            <tr>
                <td colspan='3'><center><button type='Submit' class="submit-button" name='register_submit' required>Submit</button></center></td>
            </tr>
        </table>
    </form>

    <div class="sign-in-link">
        <h3><a href='sindex.php'>Registered? Sign In!</a></h3>
    </div>
</body>

<?php include 'footer.php'; ?>
</html>
