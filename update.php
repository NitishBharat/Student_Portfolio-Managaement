<?php
session_start();
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $username = $_POST['username'];
    $address = $_POST['address'];
    $contact_num = $_POST['contact_num'];
    $jee_rank = $_POST['jee_rank'];
    $semester = $_POST['semester'];
    $cgpa = $_POST['cgpa'];

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'login';

    $conn = mysqli_connect($host,$user,$pass,$dbname);

    $sql = "UPDATE users SET name = '$name', address = '$address', contact_num = '$contact_num', 
            semester = '$semester', cgpa = '$cgpa', jee_rank = '$jee_rank'  WHERE username = '$username'";
    mysqli_query($conn,$sql);
}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Student Information</title>
</head>
<body>

    <form action = "#" method="POST">

        Name : <input type="text" name="name" value = <?php echo $_SESSION['username']?>> <br>
        Username : <input type="text" name="username"> <br>
        Address : <input type="text" name="address"> <br>
        ContactNumber : <input type="text" name="contact_num"> <br>
        JEE Rank : <input type="text" name="jee_rank"> <br>
        Semester : <input type="text" name="semester"> <br>    
        CGPA : <input type="text" name="cgpa"> <br>    
        <br>
        <input type="submit" name="submit" value="Update Data">
    </form>
    
</body>
</html>