<?php
include 'connect.php';
include 'head2.php';
?>
<html>
<head>
 <link rel='stylesheet' href='index.css'>
 <style >  
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

        .user-sign-in-link {
            text-align: center;
            font: 10px;
            margin-top: 10px;
        }

        .user-sign-in-link a {
			color: #354f52;
            text-decoration: none;
        }
    </style>
</style>
<title>Quick-Book</title>
</head>
<body>
<div class="container">
        
        <h2><b>Admin Sign In<img src="https://img.icons8.com/bubbles/280/000000/admin-settings-male.png" alt="Admin Icon"></b></h2>
    </div>

    <form method='post' action='adminauthenticate.php'>
        <div>
            <table align="center" class="table">
                <tr>
                    <td><h3>Email id:</td>
                    <td><input type="email" name="email" maxlength='50'></td>
                </tr>
                <tr>
                    <td><h3>Password:</td>
                    <td><input type="password" name="password" maxlength='50'></td>
                </tr>
                <tr>
                    <td colspan='2'><center><button type='Submit' class="submit-button" name='login_submit'>Sign in</button></center></td>
                </tr>
            </table>
        </div>
    </form>

    <div class="user-sign-in-link">
        <h3><a href='sindex.php'>User Sign In?</a></h3>
    </div>
</body>
<?php include 'footer.php'; ?>
</html>


 