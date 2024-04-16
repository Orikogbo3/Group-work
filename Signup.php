<?php
    session_start();

    include("db.php");

    if ($_SERVER['REQUEST_METHOD'] == "POST") 
    {
        // Retrieve form data
        $username = $_POST['username'];
        $email = $_POST['email'];
        $number= $_POST['number'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        

        if(!empty($email) && !empty($password) && !empty($cpassword) && !is_numeric($email))
        {

            $query = "insert into form (username, email, number, password, cpassword) values('$username', '$email', '$number', '$password', '$cpassword')";

            $result = mysqli_query($con, $query);

            if($result) 
            {
                echo "<script>alert('Successfully Registered');</script>";
            }
            else {
                echo "<script>alert('Errror: " . mysqli_error($con) . "');</script>";
            }

        } else   { 

            echo "<script> alert('Please Enter some valid Information');</script>";

        }
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    <div class="banner">
        <div class="navbar">
            <a href=""><img src="unerground aberdeen.png" width="200" class="logo"></a>
            <ion-icon name="call-outline"></ion-icon>
            <ul>
                <li><a href="Homepage.php">Home</a></li>
                 <li><a href="#">Help & Support</a>    <ion-icon name="call-outline" style= "font-size: 20px; color: #fff;"  ></ion-icon></li>
                <li><a href="about.html">About</a></li>
            </ul>
        </div>

<div class="container">
    <form action="#" method="POST">
        <h2>Sign Up</h2>
        <div class="form-group">
            <label for="name">Full name</label>
            <input type="text" id="username" name="username" placeholder="Full Name" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" id="email" name="email" placeholder="Enter your email address"  required>
            
        </div>
         <div class="form-group">
            <label for="mobile">Phone Number</label>
            <input type="text" id="number" name="number" placeholder="Your phone number" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>
        </div>
       
        <div class="form-group">
            <label for="confirm-password">Confirm Password</label>
            <input type="password" id="cpassword" name="cpassword" placeholder="Confirm your password" required>
        </div>
        <p><input type="checkbox">Agree to the terms & conditions</p>
        <button type="submit">Sign Up</button>
        <p>Already have an account? <a href="loginabb.php">Log In</a></p>
    </form>
</div>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>
