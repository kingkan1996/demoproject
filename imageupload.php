<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>image</title>
</head>
<body>

    <!-- <form action = "<?php echo $_SERVER['PHP_SELF'];?>" mathod ="post" enctype ="multipart/form-data">
    <input type ="file" name = "upload"><br><br>
    <input type ="submit" name = "submit" value = "upload file" >

   </form> -->
   <form action="imageupload.php" method="post" enctype="multipart/form-data">
<input type = "file" name = "image"><br><br>
<input type = "submit" name = "submit" value = "upload">

</form>
</body>
</html>

<?php
$conn = mysqli_connect('localhost','root','','demo');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    ?><script>alert("connected");</script><?php
}

if (isset($_POST['submit']) && isset($_FILES['image'])){
    // this code jast for test
    // echo $_FILES ['image']['name'];/*its work show file name  */
    // echo $_FILES ['image']['tmp_name'];/*its work location file name  */

$filename = $_FILES ['image']['name'];/*its work show file name  */
$tempname = $_FILES ['image']['tmp_name'];/*its work location file name  */
// $imgtype  =  $_FILES ['image']['type'];


$load = "picture/" .$filename;
echo" <img src='$load ' style='width: auto; height: auto;' />";

// if ($imgtype == 'jpg/png') {
    # code...
    // ------------
     if (move_uploaded_file($tempname,$load)) {

            $sql = "INSERT INTO loadimage(`imgtest`) VALUES ('$filename')";
         if (mysqli_query($conn,$sql)) {
            
            //  echo"<img src='{$tempname}'>";
         
            //  echo("image store in database");
      
       }else{
            echo "not uploded";
         }

        echo"";
    
     } else {
        echo"not uploded";
     } 
    // -------------------------
}



// $sql_query = "SELECT*FROM `loadimage`";
//         if ($result = $conn->query($sql_query)) {
//           while ($row = $result->fetch_assoc()) {

//             $Id = $row['id'];
//             $img = $row['imgtest'];
//             header("Content-type: image/jpeg");
           
//             echo "
//             <tr>
            
//             <td>
//              echo 'Image source: $img';
//             </td>
    
//             </tr>
            
//             ";
//           }
//         }

?>




