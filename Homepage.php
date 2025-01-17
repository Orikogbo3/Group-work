<?php

    include("db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial scale=1.0">
    <link rel="icon" type="image/jpg" href="buspng.jpg">
    <link rel="stylesheet" href="homepage.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Book a Ticket</title>
</head>
<body>
    <div class="banner">
        <div class="navbar">
            <img src="unerground aberdeen.png" width="500" class="logo">
            <ion-icon name="call-outline"></ion-icon>
            <ul>
                <li><a href="loginabb.php">Login</a></li>
                <li><a href="#">Help & Support</a>    <ion-icon name="call-outline" style= "font-size: 20px; color: #fff;"  ></ion-icon></li>
                <li><a href="about.html">About</a></li>
            </ul>
         </div>
        <div class="content">
            <h1>Welcome to Aberdeen Bus Booking</h1>
            <p>This is the page for booking Bus Tickets around Aberdeen<br>If you are looking to Travel within Aberdeen  <a style="text-decoration: none;color: red; " href="loginabb.php" >click Here</a> </p>
            <section class="booking-form">
                <h2 style="font-size: 200%; ">Plan Your Journey </h2><br>
                <form>
                    <label for="from">From:</label>
                    <input type="text" id="from" name="from" required>
                    <label for="to">To:</label>
                    <input type="text" id="to" name="to" required>
                    <label for="to">Date:</label>
                    <input type="date" id="date" name="date" required>
                    <label for="to">Time:</label>
                    <input type="time" id="time" name="time" required>
                    <button type="button"><span></span><a href="#" style="text-decoration: none; color: #fff; font-weight: bold; font-size: 120%; " >Search Buses</a></button>
                </form>
            </section>
            <div>
                <button type="button"><span></span><a href="loginabb.php" style="text-decoration: none; color: #fff; font-weight: bold; font-size: 120%; " >Book Ticket</a></button>
                
            </div>

        </div>
         
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    
</body>
</html>
