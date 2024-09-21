<?php

require("connection.php");

if (isset($_GET['delete_id'])) {
    $id=$_GET['delete_id'];
    $sql= "DELETE FROM `student` WHERE id=$id";

    $result=mysqli_query($conn,$sql);
        if ($result) {
            // echo "data is deleted";
            header("location:show_data.php");
        }
        else{
            echo "data is not deleted";
        }
    }
