<!-- <?php
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'login';

    $conn = mysqli_connect($host,$user,$pass,$dbname);

    $sql = "DELETE FROM users WHERE username='$username'";
    mysqli_query($conn,$sql);
}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Delete Student Information</title>
</head>
<body>

    <form action = "#" method="POST">

        Username of Student to be deleted : : <input type="text" name="username"> <br>
        <br>
        <input type="submit" name="submit" value="Update Data">
    </form>
    
</body>
</html> -->


<?php
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'login';

    $conn = mysqli_connect($host,$user,$pass,$dbname);

    $sql = "DELETE FROM users WHERE username='$username'";
    mysqli_query($conn,$sql);
}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Delete Student Information</title>
    <style>
        /* Add CSS styles here */
        html {
            background-color: #3498db; /* Set background color to blue for the whole page */
        }
        
        body {
            font-family: Arial, sans-serif;
            font-size: 16px;
            line-height: 1.5;
            color: #333;
            margin: 0;
            padding: 0;
            background-color: transparent; /* Set background color to transparent for the body element */
        }

        h1 {
            font-size: 36px;
            font-weight: bold;
            text-align: center;
            margin-top: 50px;
            margin-bottom: 30px;
        }

        form {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 10px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            margin-bottom: 20px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            text-transform: uppercase;
            transition: background-color 0.2s ease;
        }

        input[type="submit"]:hover {
            background-color: #3e8e41;
        }
    </style>
</head>
<body>

    <h1>Delete Student Information</h1>

    <form action="#" method="POST">

        <label for="username">Username of Student to be deleted:</label>
        <input type="text" name="username" id="username">

        <input type="submit" name="submit" value="Delete Student">

    </form>
    
</body>
</html>