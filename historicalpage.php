<?php
    require 'connect.php';
?>
<html lang="en-US">
    <head>
        <title>Historical Books </title>
        <link rel="stylesheet" type="text/css" href="catogaries.css">
        <link rel="icon" type="image/x-icon" href="logo.png">
        <script src="store.js" async> </script>
    </head>

    <body id="catogaryindex">
    <header>
    <h3 id="catogary">Historical Books</h3>
        <p id="para">historical Books, a novel that has as its setting a period of history and that attempts to convey the spirit, manners, and social conditions of a past age with realistic detail and fidelity (which is in some cases only apparent fidelity) to historical fact.</p>
        <br><hr>
    </header>
    
            <div class="row" >
            <?php
            $sql = "SELECT * FROM book WHERE Catogary='Historical'";
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
                            <button class="add">Add to Cart</button>
                        </div>
                    <?php } ?>
            <?php  }  ?> 
          </div>
 
    </body>

    </html>
