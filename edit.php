<?php
require 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="adminstyle.css">
    <script src="script.js" async> </script>
    <link rel="icon" type="image/x-icon" href="Images\logo.png">
</head>

<body>
    <div class="BooksContainer">
        <a href="logout.php" id="logout">Logout</a>
        <br><br><h1>Edit Page</h1><br><br>
        <?php
        $sql = "SELECT * FROM book";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
        ?>
            <table class="BooksContainer">
                <tr>
                    <th>ID</th>
                    <th>BookName</th>
                    <th>Author</th>
                    <th>Catogary</th>
                    <th>SubCatogary</th>
                    <th>Image</th>
                    <th>Price</th>
                </tr>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?= $row['ID'] ?></td>
                        <td><?= $row['BookName'] ?></td>
                        <td><?= $row['Author'] ?></td>
                        <td><?= $row['Catogary'] ?></td>
                        <td><?= $row['SubCatogary'] ?></td>
                        <td><?= $row['Image'] ?></td>
                        <td><?= $row['Price'] ?></td>
                    </tr>
                <?php } ?>
            </table>
        <?php  } else {
            echo '<span class="err">No Rows</span>';
        } ?>
    </div>
    <br><br>
    <form method="post" action="add.php">
        <h2>Add Section:</h2>
        <table class="BooksContainer">
            <tr>
                <th>ID</th>
                <th>BookName</th>
                <th>Author</th>
                <th>Catogary</th>
                <th>SubCatogary</th>
                <th>price</th>
            </tr>
            <tr>
                <td><input type="text" placeholder="ID" name="ID" required></td>
                <td><input type="text" placeholder="BookName" name="BookName" required></td>
                <td><input type="text" placeholder="Author" name="Author" required></td>
                <td><input type="text" placeholder="Catogary" name="Catogary" required></td>
                <td><input type="text" placeholder="SubCatogary" name="SubCatogary" ></td>
                <td><input type="text" placeholder="Price" name="Price" required></td>
            </tr>
        </table>
        <button class="button" href="add.php">Add</button>     
    </form>
    <br><br>
    <form method="post" action="update.php">
        <h2>Update Section: (use the same ID)</h2>
        <table class="BooksContainer">
            <tr>
                <th>ID</th>
                <th>BookName</th>
                <th>Author</th>
                <th>Catogary</th>
                <th>SubCatogary</th>
                <th>price</th>
            </tr>
            <tr>
                <td><input type="text" placeholder="ID" name="ID" required></td>
                <td><input type="text" placeholder="BookName" name="BookName" required></td>
                <td><input type="text" placeholder="Author" name="Author" required></td>
                <td><input type="text" placeholder="Catogary" name="Catogary" required></td>
                <td><input type="text" placeholder="SubCatogary" name="SubCatogary" ></td>
                <td><input type="text" placeholder="Price" name="Price" required></td>
            </tr>
        </table>
        <button  href="update.php?id=<?php echo $row['ID'] ;?> ">update</button>
    </form>
    <br><br>
    <form method="post" action="delete.php">
        <h2>Delete Section:</h2>
        <table class="BooksContainer">
            <tr>
                <th>ID</th>
            </tr>
            <tr>
                <td><input type="text" placeholder="ID" name="ID" required></td>
        </table>
        <button href="delete.php?id=<?php echo $row['ID'] ;?>">Delete</button>     
    </form>
    <br><br>
</body>
</html>