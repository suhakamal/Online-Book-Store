<?php
require 'connect.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $sql="DELETE FROM book WHERE ID = '$_POST[ID]'";
        if(mysqli_query($conn,$sql)){
            echo "Record Has been Deleted Successfully";
        }
        else{
            echo "Error, Record Not Deleted Successfully";
        }
        
    }else
        echo"error";
    
include 'edit.php';