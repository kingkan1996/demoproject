<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
<table style="width: 100%; border-collapse: collapse; margin: 20px 0; font-size: 16px; color: #333;">
<thead style="background-color: #007BFF; color: white; text-align: left;">
    <tr>
                <th style="padding: 10px; border: 1px solid #ddd;">ID</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Name</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Contact</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Gender</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Update</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Delete</th>
            </tr>
      <tbody>
        <?php
        require('./connection.php');
        $sql_query = "SELECT * FROM STUDENT";
        if ($result = $conn->query($sql_query)) {
          while ($row = $result->fetch_assoc()) {

            $Id = $row['id'];
            $Name = $row['name'];
            $Contact = $row['contact'];
            $gender = $row['gender'];

            echo "
            <tr>
           <td style='padding: 10px; border: 1px solid #ddd; text-align: center;'>$Id</td>
                    <td style='padding: 10px; border: 1px solid #ddd;'>$Name</td>
                    <td style='padding: 10px; border: 1px solid #ddd; text-align: center;'>$Contact</td>
                    <td style='padding: 10px; border: 1px solid #ddd;'>$gender</td>
                    <td style='padding: 10px; border: 1px solid #ddd; text-align: center;'><button style='background-color: #007BFF; color: white; border: none; padding: 5px 10px; border-radius: 4px;'><a href='./update.php?update_id=$Id' style='color: white; text-decoration: none;'>Update</a></button></td>
                    <td style='padding: 10px; border: 1px solid #ddd; text-align: center;
            <td><button><a href='./update.php?update_id=$Id'>update</a></button></td>
            <td><button><a href='./delete.php?delete_id=$Id'>delete</a></button></td>

            </tr>
            
            ";
          }
        }


        ?>
    </tbody>
        
   </tehed>
  </table>

</body>

</html>