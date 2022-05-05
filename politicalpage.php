<?php
    require 'connect.php';
?>
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title> Political Books </title>
        <link rel="stylesheet" type="text/css" href="catogaries.css">
        <script src="store.js" async> </script>
        <link rel="icon" type="image/x-icon" href="logo.png">
    </head>
    <body id="catogaryindex">
        <header>
    <h3 id="catogary">Political Books</h3>
        <p id="para">Political books are the books whome relating to the ideas or strategies of a particular party or group in politics.</p>
        <br><hr>
    </header>
    
            <div class="row" >
                <?php
                $sql = "SELECT * FROM book WHERE Catogary='Political'";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                ?>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <div class="column" id="card">
                        <img src=<?php echo $row['Image'];?> >
                        <h4> <?= $row['BookName'] ?> </h4>
                        <?= "By:" ?>
                        <h5><?= $row['Author'] ?> </h5>
                        <p class="price"><?= "$".$row ['Price'] ?></p>
                        <button class="add">Add</button>
                    </div>
                <?php } ?>
                <?php  }  ?> 
          </div>
 
    </body>

    </html>
