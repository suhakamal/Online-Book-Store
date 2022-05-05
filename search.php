<?php
require 'connect.php';
$search = $_POST['search'];
$sql ="SELECT * FROM book WHERE BookName LIKE '%$search%'";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0){
    while ($row = mysqli_fetch_assoc($result)) {
            $filter = $row["Catogary"];
            header("Location: $filter.php?message=$search");
    
        }
    } 
    else {
        $filter = "Oops, No Such Book Available";
        header("Location: index.php?message=$filter");
    }