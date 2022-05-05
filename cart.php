<?php
session_start();
require 'connect.php';
?>
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title> Cart </title>
        <meta name="description" content="Online Library">
        <meta name="author" content="Suha Kamal">
        <link rel="stylesheet" type="text/css" href="catogaries.css">
        <link rel="stylesheet" type="text/css" href="indexStyle.css">
        <link rel="icon" type="image/x-icon" href="logo.png">
        <script src="cart.js" async> </script>
    </head>
    <body>
        <div class="items">
        <div class="row" >
            <?php
            $sql = "SELECT *  FROM book WHERE ID=1";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {?>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <div class="column" id="card">
                        <img src=<?php echo $row['Image'];?> >
                        <h4 class"BookName"> <?= $row['BookName'] ?> </h4>
                        <?= "By:" ?>
                        <h5><?= $row['Author'] ?> </h5>
                        <p class="price"><?= "$".$row ['Price'] ?></p>
                       
                        <button class="remove" >Remove</button>
                    </div>
                <?php } ?>
                <?php  }  ?> 
        </div>
        <div class="row" >
            <?php
            $sql = "SELECT *  FROM book WHERE ID=2";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {?>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <div class="column" id="card">
                        <img src=<?php echo $row['Image'];?> >
                        <h4 class"BookName"> <?= $row['BookName'] ?> </h4>
                        <?= "By:" ?>
                        <h5><?= $row['Author'] ?> </h5>
                        <p class="price"><?= "$".$row ['Price'] ?></p>
                       
                        <button class="remove" >Remove</button>
                    </div>
                <?php } ?>
                <?php  }  ?> 
        </div>
        <div class="row" >
            <?php
            $sql = "SELECT *  FROM book WHERE ID=3";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {?>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <div class="column" id="card">
                        <img src=<?php echo $row['Image'];?> >
                        <h4 class"BookName"> <?= $row['BookName'] ?> </h4>
                        <?= "By:" ?>
                        <h5><?= $row['Author'] ?> </h5>
                        <p id="price"><?= "$".$row ['Price'] ?></p>
                       
                        <button class="remove" >Remove</button>

                    </div>
                <?php } ?>
                <?php  }  ?> 

        </div>
        <span class="TotalPrice">$40</span>
                </div>
    </body>
</html>