<?php
require 'connect.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $sql="UPDATE book SET BookName = '$_POST[BookName]' , Author='$_POST[Author]', Catogary = '$_POST[Catogary]', SubCatogary = '$_POST[SubCatogary]', Price = '$_POST[Price]' WHERE ID = '$_POST[ID]' ";
        if(mysqli_query($conn,$sql)){
            echo "Record Has Been Modified Successfully";
        }
        else{
            echo "Error, Record Has not Been Modified Successfully";
        }
        
}else
        echo"error";
include 'edit.php';