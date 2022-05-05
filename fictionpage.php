<?php
    require 'connect.php';
?>
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title> Fiction Books </title>
        <link rel="stylesheet" type="text/css" href="catogaries.css">
        <script src="store.js" async> </script>
        <link rel="icon" type="image/x-icon" href="logo.png">
    </head>
    <body id="catogaryindex">
        <header>
    <h3 id="catogary">Fiction Books</h3>
        <p id="para">"Fiction" refers to literature created from the imagination. Mysteries, science fiction, romance, fantasy, chick lit, crime thrillers are all fiction genres. Examples of classic fiction include To Kill a Mockingbird by Harper Lee, A Tale of Two Cities by Charles Dickens, 1984 by George Orwell and Pride and Prejudice by Jane Austen. Our Fiction Department also has a large selection of popular movies and television shows on DVD.</p>
        <br><hr>
    </header>
    
            <div class="row" >
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
                        <p class="price"><?= "$".$row ['Price'] ?></p>
                        <button class="add">Add</button>
                    </div>
                <?php } ?>
                <?php  }  ?> 
          </div>
 
    </body>

    </html>
