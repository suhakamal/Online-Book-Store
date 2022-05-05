<?php
require 'connect.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $sql="INSERT INTO book  (BookName, Author, Catogary, SubCatogary, Price) VALUES ('$_POST[BookName]' ,'$_POST[Author]' , '$_POST[Catogary]',  '$_POST[SubCatogary]' ,'$_POST[Price]')";
        if(mysqli_query($conn,$sql)){
            echo "Record Has Been Added Successfully";
        }
        else{
            echo "Error, Record Has not Been Added Successfully";
        }
    }else
        echo"error"; 

    include 'edit.php';