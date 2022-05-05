<?php
error_reporting(0);
session_start();
if ( $_SESSION['email'] )  {
    header('Location: index.php');
}
require 'connect.php';
$repeat_err = $success = $fail = $exist_err  = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if ($_POST['password'] != $_POST['RepeatPassword']) {
        $repeat_err = "<span class='err'>Password does not match, Try again</span>";
    } else {
        $sql = "SELECT * FROM registration WHERE email = '$_POST[email]'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                $exist_err = '<span class="err">Could not register, Email already exists<br></span>';
            } else {
                $sql = "INSERT INTO registration ( FirstName, LastName, Email, Password ) VALUES ( '$_POST[FirstName]', '$_POST[LastName]', '$_POST[email]', '$_POST[password]')";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    header('Location: index.php');
                } else {
                    $fail = '<span class="err">Failed to Registration</span>';
                }
            }
        }
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="LoginRegistration.css" />
    <link rel="icon" type="image/x-icon" href="logo.png">
</head>
<body id="RegisterBody">

    <?= $success ?><?= $fail ?>
    <h1 id="H1Register">Create a New Account</h1>
    
            <hr>

    <form action="register.php" method="post" id="RegisterForm" >

      
        
        <label for="FirstName" class="RegisterLabel"><b>First Name:</b></label><br>
        <input type="text" placeholder="First Name" name="FirstName" class="placeholder" id="RegisterPlaceholder" required><br><br>


        <label for="LastName" class="RegisterLabel"><b>Last Name:</b></label><br>
        <input type="text" placeholder="Last Name" name="LastName" class="placeholder" id="RegisterPlaceholder" required><br><br>


        <label for="email" class="RegisterLabel"><b>E-mail:</b></label><br>
        <input type="text" placeholder="E-mail" name="email"  class="placeholder" id="RegisterPlaceholder" required><br><br>
        <?= $exist_err ?>


        <label for="password" class="RegisterLabel"><b>Password:</b></label><br>
        <input type="password" placeholder="Password" name="password" class="placeholder" id="RegisterPlaceholder" required><br><br>


        <label for="RepeatPassword" class="RegisterLabel"><b>Repeat Password:</b></label><br>
        <input type="password" placeholder="Repeat Password" name="RepeatPassword" class="placeholder" id="RegisterPlaceholder" required><br><br>
        <?= $repeat_err ?>
        
        <button type="button" onClick="window.location.href='login.php';" id="CancelButton">Cancel</button>
        <button type="submit" id="SignupButton">Sign Up</button>
        
    </form>

</body>
</html>