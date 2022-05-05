<?php
session_start();
require 'connect.php';
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <link rel="stylesheet" type="text/css" href="adminstyle.css">
    <script src="script.js" async> </script>
    <link rel="icon" type="image/x-icon" href="logo.png">
</head>

<body>
    <div class="BooksContainer">
        <a href="logout.php" id="logout">Logout</a>
        <br><br><h1>Books</h1><br><br>
        <?php
        $sql = "SELECT * FROM book";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
        ?>
            <table>
                <tr>
                    <th>ID</th>
                    <th>BookName</th>
                    <th>Author</th>
                    <th>Catogary</th>
                    <th>SubCatogary</th>
                    <th>Image</th>
                    <th>Price</th>
                    <th>Edit</th>
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
                        <td><a href='edit.php' >Change</a></td>
                    </tr>
                <?php } ?>
            </table>
        <?php  } else {
            echo '<span class="err">No Rows</span>';
        } ?>
    </div>
</body>
</html>