<?php
require("./connection.php");

$id=$_GET['update_id'];

if (isset($_POST['submit'])) {
    $name=$_POST['name'];
    $contact=$_POST['contact'];
    $gender=$_POST['gender'];
    $sql = "UPDATE `student` SET name = '$name', contact = '$contact', gender = '$gender' WHERE id = '$id'";
if(mysqli_query($conn,$sql)){
    echo" data is updated";
    
}
else {
    echo"something is wrong";
}

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>XYZ student form</h1>
    <form action="" method="post">
        <div>
            <label for="name">Name: </label>
            <input type="text" name="name" placeholder="enter name">
        </div>
        <div>
            <label for="contact">Contact: </label>
            <input type="text" name="contact" placeholder="enter contact number">
        </div>
        <div>            
            <label for="gender">Gender: </label>
            <label for="gender">Male</label>
            <input type="radio" name="gender" value="Male">
            <label for="gender">Female</label>
            <input type="radio" name="gender" value="Female">
        </div>
        <input type="submit" name="submit" placeholder="update">
    </form>
    <button><a href="./show_data.php">show data</a></button>
</body>
</html>