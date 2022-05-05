<?php
session_start();
require 'helper.php';
if (!isset($_SESSION['Email'])) {
    redirect('login.php');
}
require 'connect.php';
?>
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title> Home </title>
        <meta name="description" content="Online Library">
        <meta name="author" content="Suha Kamal">
        <link rel="stylesheet" type="text/css" href="catogaries.css">
        <link rel="stylesheet" type="text/css" href="indexStyle.css">
        <link rel="stylesheet" type="text/css" href="popup.css">
        <script src="yourcart.js" async> </script>
        <link rel="icon" type="image/x-icon" href="logo.png">
        <script src="store.js" async> </script>
    </head>
    <body>

        <header>
            <h1 id="h1Header">Welcome<br> to<br> the<br> Library</h1>
            <h2 id="h2Header">Keep Reading...</h2> 
        </header>
        
        
        <button id="catogary1" class="catogary" onClick="window.location.href='fictionpage.php';">Fiction</button>
        <button id="catogary2" class="catogary" onClick="window.location.href='politicalpage.php';">Political</button>
        <button id="catogary3" class="catogary" onClick="window.location.href='Historicalpage.php';">Historical</button>
        <button id="catogary4" class="catogary" onClick="window.location.href='childrenpage.php';">Children</button>
        
        <ul id="StickyNav">
            <li><a href="logout.php" >Logout</a></li>
            <li><a href="aboutus.html" >AboutUs</a></li>
            <li><a id="cart"onclick="OpenCart()">Your Cart</a></li>
            <li><form action="search.php" method="post" id="search"><input type="text" placeholder="Search..." name="search">
            <input type="submit" id="submit"></form></li>
        </ul>
        <?php
            if (isset($_GET['message'])) :?><p id="FoundPara"> <?php print $_GET['message'];?></p><?php
            endif;
        ?>
        <br><br><br> 
        <div class="row" >
                <?php
                $sql = "SELECT * FROM book";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                ?>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <div class="column" id="card">
                        <img src=<?php echo $row['Image'];?> >
                        <h4> <?= $row['BookName'] ?> </h4>
                        <?= "By:" ?>
                        <h5><?= $row['Author'] ?> </h5>
                        <p id="price"><?= "$".$row ['Price'] ?></p>
                        <button class="add">Add</button>
                    </div>
                <?php } ?>
                <?php  }  ?> 
        </div>

        <div class="CartPopup" id="TheCart">
        <div class="row" class="CartContainer">
                <?php
                $sql = "SELECT * FROM book WHERE Catogary='Fiction'";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                ?>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <div class="column" id="card">
                        <img src=<?php echo $row['Image'];?> >
                        <h4> <?= $row['BookName'] ?> </h4>
                        <?= "By:" ?>
                        <h5><?= $row['Author'] ?> </h5>
                        <p id="price"><?= "$".$row ['Price'] ?></p>
                        <button class="remove">Remove</button>
                    </div>
                <?php } ?>
                <?php  }  ?> 
        </div>
        <button id="close"onclick="CloseCart()">Close</button>
         </div>




    </body>
</html>