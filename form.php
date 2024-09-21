<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>


</head>

<body>
<h1 style="font-size: 36px; color: #333; text-align: center; margin-bottom: 20px; font-family: 'Arial', sans-serif; text-transform: uppercase; border-bottom: 2px solid #007BFF; padding-bottom: 10px;">
    <form action="./upload.php" method="post" style="max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #ddd; border-radius: 8px; background-color: #f9f9f9; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        <div style="margin-bottom: 15px;">
            <label for="name" style="display: block; margin-bottom: 5px; font-weight: bold; color: #333;">Name: </label>
            <input type="text" name="name" placeholder="enter name" required pattern="[A-Za-z\s]+" style="width: calc(100% - 22px); padding: 10px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px; box-sizing: border-box;">
        </div>
        <div style="margin-bottom: 15px;">
            <label for="contact" style="display: block; margin-bottom: 5px; font-weight: bold; color: #333;">Contact: </label>
            <input type="text" name="contact" placeholder="enter contact number" required pattern="\d{10,15}" style="width: calc(100% - 22px); padding: 10px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px; box-sizing: border-box;">
        </div>
        <div style="margin-bottom: 15px;">
            <label for="gender" style="display: block; margin-bottom: 5px; font-weight: bold; color: #333;">Gender: </label>
            <label for="gender_male" style="margin-right: 10px;">Male</label>
            <input type="radio" id="gender_male" name="gender" value="Male">
            <label for="gender_female" style="margin-right: 10px;">Female</label>
            <input type="radio" id="gender_female" name="gender" value="Female">
        </div>
        <input type="submit" value="Submit" style="background-color: #4CAF50; color: white; border: none; padding: 10px 20px; font-size: 16px; border-radius: 4px; cursor: pointer; transition: background-color 0.3s ease;">
    </form>
    <a href="./show_data.php" style="text-decoration: none; color: #007BFF; font-size: 16px; padding: 10px 15px; border: 1px solid #007BFF; border-radius: 4px; background-color: #f8f9fa; transition: background-color 0.3s, color 0.3s; margin-right: 10px;">Show Data</a>
    

</body>

</html>