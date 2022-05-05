<?php
    require 'connect.php';
?>
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title> Children Books </title>
        <link rel="stylesheet" type="text/css" href="catogaries.css">
        <script src="store.js" async> </script>
        <link rel="icon" type="image/x-icon" href="logo.png">
    </head>
    <body id="catogaryindex">
        <header>
    <h3 id="catogary">Children Books</h3>
        <p id="para">Children's literature or juvenile literature includes stories, books, magazines, and poems that are created for children. Modern children's literature is classified in two different ways: genre or the intended age of the reader.</p>
        <br><hr>
    </header>
    <h3 >Pictured Stories</h3>
            <div class="row" >
                <?php
                $sql = "SELECT * FROM book WHERE SubCatogary='Pictured Stories'";
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
          <h3 >Sub Catogary</h3>
          <div class="row" >
                <?php
                $sql = "SELECT * FROM book WHERE SubCatogary='Non-Pictured Stories'";
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

 
    </body>

    </html>
