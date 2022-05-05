<?php
    require 'connect.php';
?>
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title> Search Result </title>
        <link rel="stylesheet" type="text/css" href="catogaries.css">
        <link rel="icon" type="image/x-icon" href="logo.png">
        <script src="store.js" async> </script>
    </head>
    <body id="catogaryindex">
        
            <div class="row" >
                            
                <?php
                    if (isset($_GET['message'])) :  $_GET['message']; endif; ?><?php
                    $sql = "SELECT * FROM book WHERE BookName LIKE '%$_GET[message]%'";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_assoc($result)  ;
                        ?>
                        <p id="FoundPara">Lucky You, Your book is Found</p>
                            <div class="column" id="found" >
                    
                            <img src=<?php echo $row['Image'];?> >
                                        <h4> <?= $row['BookName'] ?> </h4>
                                        <?= "By:" ?>
                                        <h5><?= $row['Author'] ?> </h5>
                                        <p id="price"><?= "$".$row ['Price'] ?></p>
                                        <button >Add</button>
                                        </div>
                            <?php 
                    }
                    ?>
          </div>
 
    </body>

    </html>














