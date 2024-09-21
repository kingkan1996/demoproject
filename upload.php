<?php
    require('./connection.php');
    $name=$_POST['name'];
    $contact=$_POST['contact'];
    $gender=$_POST['gender'];

    if ($name!="" && $contact!="" && $gender!="") {
        $sql="INSERT INTO student(`name`, `contact`, `gender`) VALUES ('$name','$contact','$gender')";

        if (mysqli_query($conn,$sql)) {
            header("location:form.php");
        }
        else{
            echo"somthing was wrong pls try again";
        }
    }
    else {
        print("please fill all fields");
    }

?>