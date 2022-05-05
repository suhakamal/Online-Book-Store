<?php
session_start();

require 'connect.php';
$repeat_err = $success = $fail = $exist_err  = $login_failed = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $sql = "SELECT * FROM registration WHERE Email = '$_POST[email]' and password = '$_POST[password]'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        if($_POST['email']=='admin' and $_POST['password']=='admin'){
            header("Location: admin.php");
        }
        else{
            $_SESSION['Email'] = $_POST['email'];
            header("Location: index.php");
        }
    } else {
        $login_failed = '<span class="err">Incorrect Email or Password</span>';
    }
}?>
<!DOCTYPE html>
<html>
<head>
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="LoginRegistration.css" />
    <link rel="icon" type="image/x-icon" href="logo.png">
</head>
<body>

    <h1 class="LoginHeadings" id="H1Login">Find Your Best Friend</h1>
    
    <?= $login_failed ?>
    <form action="login.php" method="post" id="LoginForm">

            <label for="email"><b>E-mail</b></label>
            <input type="text" placeholder="Enter E-mail" name="email" id="email" class="placeholder" required><br>
            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" id="password" class="placeholder"required><br>
            <button type="submit" id="LoginButton">Login</button>
            <button type="submit" id="RegisterButton" onClick="window.location.href='register.php';">Register</button>     
    </form>
</body>

</html>