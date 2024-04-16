<?php
    session_start();

    include("db.php");


    if ($_SERVER['REQUEST_METHOD'] == "POST") 
    {
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password = mysqli_real_escape_string($con, $_POST['password']);

        if(!empty($email) && !empty($password) && !is_numeric($email))
        {
            $query = "select * from form where email = '$email' limit 1";
            $result  = mysqli_query($con, $query);

           
            if($result && mysqli_num_rows($result) > 0)
            {
                $user_data = mysqli_fetch_assoc($result);

                if(password_veriify($password, $user_data['password']))
                {
                    $_SESSION['user_id'] = $user_data['uid'];
                    header("location: Homepage.php");
                    exit();
                }
                else
                {
                    echo "<script>alert('Incorrect password');</script>";
                }
            }
            else
            {
                echo"<script>alert('User not found');</script>"; // Notify user if user not found
            }
            
        }
        else
        {
            echo "<script>alert('Please fill out all fields correctly');</script>";
        }

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/jpg" href="unerground aberdeen.png">
    <link rel="stylesheet" href="loginabb.css">
    <title>Login</title>
    <script>
        document.getElementById("username").oninvalid = function(event) {
            event.target.setCustomValidity ("Please fill out this field. ");
        };
        document.getElementById("password").oninvalid = function(event) {
            event.target.setCustomValidity ("Please fill out this field. ");
        };
    </script>
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
    <div class="login" >
        <h1>Login</h1>
        <form action="Homepage.php" method="POST">
            <div class="input-box">
            <input type="email" required placeholder="Your Email" id="email" class="form-control" name="email" >
            <ion-icon name="mail-outline"></ion-icon>
            </div>
            <div class="input-box">
                
            <input type="password" required placeholder="Your Password" id="password" class="form-control" name="password" >
            <ion-icon name="lock-closed-outline"></ion-icon>
            </div>
            <p><input type="checkbox">I agree to the terms of Services</p>
            <p>Forgot Password ? <a style="color: red; text-decoration: none;" class="dotted" href="#" >Click Here</a> </p>
            <div>
            
            <button type="submit" class="submit"><span></span>Log in</button>
            <p class="text-divider">Or</p>
            <p>Don't have an account?</p>
            <button type="button" class="log-btn"><a href="Signup.php" style="color: white; text-decoration: none;">Sign up</button></a>
            </div>

        </form>

    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
</body>
</html>