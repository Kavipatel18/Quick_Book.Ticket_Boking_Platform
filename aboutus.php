<?php
include 'connect.php';
include 'head2.php';
?>

<!DOCTYPE html>
<html>

<head>
    <link rel='stylesheet' href='index.css'>
    <style>
        body {
            background-color: #F5F1F0; /* Light grayish background */
            font-family: Montserrat, sans-serif;
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center;
            font-size: 30px; /* Increase font size for the heading */
            color: #333; /* Dark gray text color */
            margin-top: 20px;
        }

        h4 {
            font-size: 18px; /* Adjust font size for content */
            color: #555; /* Slightly darker gray text color */
            margin-bottom: 20px;
        }

        .mark-text {
            background-color: #f39c12; /* Orange background for marked text */
            color: #fff; /* White text color for marked text */
            padding: 5px;
        }

        .parent-container {
            padding: 20px;
            width: 80%; /* Adjust container width as needed */
            margin: 0 auto; /* Center the container horizontally */
            background-color: #fff; /* White background for the container */
            border-radius: 5px; /* Rounded corners for the container */
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2); /* Shadow for the container */
        }

        .support-container {
            padding: 20px;
        }

        .support-container h4 {
            text-align: center;
            margin-top: 20px;
        }

        .support-info {
            font-size: 18px; /* Adjust font size for support information */
            color: #333; /* Dark gray text color for support information */
            text-align: center;
        }
    </style>
    <title>About Us</title>
</head>

<body>
    <h2><b><mark>We are Quick-Book <img src="https://img.icons8.com/?size=1x&id=24761&format=png"/></mark></b></h2>
    
    <div class="parent-container">
        <div style="padding: 20px;">
            <!-- Removed the content of the <h4> block and added something new -->
            <h4>
                Welcome to Quick-Book - your gateway to unforgettable adventures! We're not just a travel agency; we're your travel partners, dedicated to making your journeys extraordinary. Whether you're planning a weekend getaway or a global escapade, we've got you covered. Join us on a journey to explore the world's wonders, one booking at a time!
            </h4>
        </div>

        <div class="support-container">
            <h2><b><mark>Support <img src="https://img.icons8.com/?size=1x&id=30407&format=png"/></mark></b></h2>
            <h4>
                We are always here for your technical support. We provide 24*7 Support and are also available on social platforms.
            </h4>
            <div class="support-info">
                Center:
                Quick-Book - 213, Amby Valley, Nr Manisha Garnala, Utran, Surat - 394101
                <br>
                Help-line No: 8238774204
            </div>
        </div>
    </div>
</body>

</html>

<?php include 'footer.php'; ?>
